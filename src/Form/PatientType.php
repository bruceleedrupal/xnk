<?php

namespace App\Form;

use App\Entity\Patient;
use App\Form\BirthdayType;
use App\Entity\Options;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class PatientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder  
        ->add('name',TextType::class,[
                'label'=>'姓名',
            ])
            ->add('ryrq',DateType::class,[
                'label'=>'入院日期',
                'required'=>false,
                'format'=>'yyyy-MM-dd'
            ])            
            ->add('tel',TextType::class,[
                'label'=>'联系电话',                
            ])     
            ->add('zyh',TelType::class,[
                'label'=>'住院号',
            ]) 
            ->add('birthday',BirthdayType::class,[
                'mapped'=>true,
                'label'=>'年龄',
            ])
            ->add('tall',NumberType::class,[                
                'label'=>'身高',
                'required'=>false,
            ])
            ->add('gender',EntityType::class,[
                'class'=>Options::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('o')
                    ->where('o.parent=1')
                    ->orderBy('o.lft','asc');
                },
                'label'=>'性别',
                'choice_label'=>'title'                
                ])
            ->add('scholarship',EntityType::class,[
                'class'=>Options::class,
                'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('o')
                ->where('o.parent=4')
                ->orderBy('o.lft','asc');
                },
                'label'=>'文化程度',
                'choice_label'=>'title'
                ])
            ->add('marriage',EntityType::class,[
                'class'=>Options::class,
                'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('o')
                ->where('o.parent=10')
                ->orderBy('o.lft','asc');
                },
                'label'=>'婚姻状况',
                'choice_label'=>'title'
              ])
              ->add('career',EntityType::class,[
                  'class'=>Options::class,
                  'query_builder' => function (EntityRepository $er) {
                  return $er->createQueryBuilder('o')
                  ->where('o.parent=15')
                  ->orderBy('o.lft','asc');
                  },
                  'label'=>'职业',
                  'choice_label'=>'title'
             ])
            ;           
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Patient::class,
        ]);
    }
}
