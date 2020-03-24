<?php

namespace App\Form;

use App\Entity\Lcevent;
use App\Entity\Options;
use App\Repository\OptionsRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class LceventType extends AbstractType
{
    
    private $optionsRespository;
    
    public function  __construct(OptionsRepository $optionsRespository){
        $this->optionsRespository = $optionsRespository;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('lcsfrq',DateType::class,[
            'label'=>'随访日期',
            'required'=>false,
            'format'=>'yyyyMMdd',
            'attr'=>[
                'class'=>'input-group form-control p-0 border-0'
            ]
        ])
        ->add('lcdie',ChoiceType::class,[
            'choices'  => [
                'Yes' => true,
                'No' => false,
            ],
            'attr'=>[
               'class'=>'lcevent_lcdie', 
            ],
            'placeholder'=>'是否死亡',
            'label'=>'死亡',
            'required'=>false,
        ])
        ->add('lcdie_reason',TextType::class,[
            'label'=>'死亡原因',
            'attr'=>[
                'placeholder'=>'死亡原因',
                'class'=>'lcevent_lcdie_reason', 
            ],
            
            'required'=>false,
        ])
        ->add('lcjxxs',CheckboxType::class,[
            'label'=>'急性心衰',
            'attr'=>[
                'class'=>'icheck-primary ml-4'
            ],
            'required'=>false,
        ])
        ->add('lczjnxs',EntityType::class,[
            'class'=>Options::class,
            'choices'=>$this->optionsRespository->findChirenOptions(233),
            'label'=>'支架内血栓',
            'choice_label'=>'title',
            'required'=>false,
        ])
        ->add('lcbxgxycj',EntityType::class,[
            'class'=>Options::class,
            'choices'=>$this->optionsRespository->findChirenOptions(237),
            'label'=>'支架内血栓',
            'multiple'=>true,
            'choice_label'=>'title',
            'required'=>false,
        ])
        ->add('lczz',EntityType::class,[
            'class'=>Options::class,
            'choices'=>$this->optionsRespository->findChirenOptions(241),
            'label'=>'卒中',
            'choice_label'=>'title',
            'required'=>false,
        ])
        ->add('lczcxjgs',CheckboxType::class,[
            'attr'=>[
                'class'=>'icheck-primary ml-4'
            ],
            'label'=>'再次心肌梗死',
            'required'=>false,
        ])
        ->add('lccx',EntityType::class,[
            'class'=>Options::class,
            'choices'=>$this->optionsRespository->findChirenOptions(245),
            'label'=>'出血',
            'choice_label'=>'title',
            'required'=>false,
        ])
        ->add('lcexxlsc',EntityType::class,[
            'class'=>Options::class,
            'choices'=>$this->optionsRespository->findChirenOptions(249),
            'label'=>'恶性心律失常',
            'choice_label'=>'title',
            'required'=>false,
        ])
            
        ->add('lcxtzt',CheckboxType::class,[            
            'label'=>'心跳骤停',
            'attr'=>[
                'class'=>'icheck-primary ml-4'
            ],
            'required'=>false,
        ])
        ->add('ffzxgcto',ChoiceType::class,[
            'choices'  => [
                'Yes' => true,
                'No' => false,
            ],
            'placeholder'=>'CTO?',
            'label'=>'非犯罪血管CTO',
            'required'=>false,
        ])
        ->add('ffzxgpcim',EntityType::class,[
            'class'=>Options::class,
            'choices'=>$this->optionsRespository->findChirenOptions(253),
            'label'=>'非犯罪血管PCI',
            'multiple'=>true,
            'choice_label'=>'title',
            'required'=>false,
        ])
        ->add('lckxxb',ChoiceType::class,[
            'choices'  => [
                '良好' => true,
                '自行停药' => false,
            ],
            'attr'=>[
                'class'=>'lckxxb',
            ],
            'label'=>'双联抗血小板、他汀依从性',
            'required'=>false,
        ])
        ->add('lckxxb_reason',TextType::class,[
            'label'=>'停药种类、原因',
            'attr'=>[
                'placeholder'=>'停药种类、原因'
            ],
            'required'=>false,
        ])
        ->add('fjhzcry',ChoiceType::class,[
            'choices'  => [
                'Yes' => true,
                'No' => false,
            ],
            'attr'=>[
                'class'=>'fjhzcry',
            ],
            'label'=>'非计划再次入院',
            'required'=>false,
        ])
        ->add('fjhzcry_reason',TextType::class,[
            'label'=>'非计划再次入院原因',
            'attr'=>[
                'placeholder'=>'非计划再次入院原因'
            ],
            'required'=>false,
        ])
        ->add('lclvef',PercentType::class,[
            'label'=>'LVEF',
            'required'=>false,
            'scale'=>0,
            'attr'=>[
                'placeHolder'=>'LVEF'
            ]
        ])
        ->add('lcntbnp',NumberType::class,[
            'label'=>'NT pro-BNP',
            'required'=>false,
            'html5'=>true,
            'attr'=>[
                'step'=>0.1,
                'placeHolder'=>'NT pro-BNP'
            ]
        ])
            
            
            
            
            
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Lcevent::class,
        ]);
    }
}
