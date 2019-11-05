<?php 

namespace App\Form;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Doctrine\ORM\Query;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\Options;


class OptionType extends EntityType {
    
    public function configureOptions(OptionsResolver $resolver)
    {
        
        
        parent::configureOptions($resolver);  
        $resolver->setDefaults(['selectType'=> 'treegroup']);
        $resolver->setDefaults(['lvl'=> -1]);
        $resolver->setAllowedValues('selectType',['treegroup', 'flatincluded','flatexcept']);
        $resolver->setAllowedTypes('lvl', 'int');
        
        
        $choicesNormalizer = function (Options $options, $choices) {   
            $repository = $options['em']->getRepository($options['class']);
            $qb = $repository->createQueryBuilder('c');
            $qb->orderBy('c.lft', 'ASC');   
            $lvl =$options['lvl'];
            if($lvl>=0) {
                $qb->where('c.lvl <= :lvl')
                ->setParameter('lvl',$lvl);
            }
            
           
            
            
            if($options['selectType']=='treegroup') {
                $repository = $options['em']->getRepository($options['class']);         
               
                $options['em']->getConfiguration()->addCustomHydrationMode(
                    'tree',
                    'Gedmo\Tree\Hydrator\ORM\TreeObjectHydrator'
                 );                
                $tree = $qb->getQuery()                
                ->setHint(Query::HINT_INCLUDE_META_COLUMNS, true)
                ->getResult('tree');      
                
                $choices = $this->_build_category_options($tree);               
                return $choices;
            } else {                               
                return $qb->getQuery()->getResult();}
            
        };     
        
      
        
     
            
        $resolver->setNormalizer('choices',$choicesNormalizer);    
        $resolver->setDefault('choice_label','indentTitle');   
         
    }
    
    private function _build_category_options($list) {
        $tree = array();
        foreach ($list as $l) {
            $name = $l->getIndentTitle();            
            if($l->getChildren()->isEmpty())
                $tree[$name]=$l;
                else {
                    $tree[$name]=$this->_build_category_options($l->getChildren());
                }
        }
        return $tree;
    }
    
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $data = $view->parent->vars['data'];
        if($options['selectType'] == 'flatexcept') {
            if($data->getId()) {
                foreach($view->vars['choices'] as $i=>$choice){
                    if($choice->data->getLft()>=$data->getLft() && $choice->data->getRgt()<=$data->getRgt()) {
                        unset($view->vars['choices'][$i]);
                    }
                }
            }           
        }       

    }
    
    
  
}
