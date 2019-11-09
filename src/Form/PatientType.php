<?php

namespace App\Form;

use App\Entity\Patient;
use App\Form\BirthdayType;
use App\Entity\Options;
use App\Repository\OptionsRepository;
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
    
    private $optionsRespository;
    
    public function  __construct(OptionsRepository $optionsRespository){
        $this->optionsRespository = $optionsRespository;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder  
        ->add('name',TextType::class,[
                'label'=>'姓名',           
            ])
            ->add('ryrq',DateType::class,[
                'label'=>'入院日期',
                'required'=>false,
                'format'=>'yyyyMMdd',
                'attr'=>[
                    'class'=>'input-group form-control'
                 ]
            ])            
            ->add('tel',TextType::class,[
                'label'=>'联系电话',                
            ])     
            ->add('zyh',TelType::class,[
                'label'=>'住院号',
                'attr'=>[
                     'data-toggle'=>'tooltip',
                     'title'=>'请填写住院号'
                 ]
            ]) 
            ->add('birthday',BirthdayType::class,[
                'mapped'=>true,
                'label'=>'年龄',
            ])
            ->add('tall',NumberType::class,[                
                'label'=>'身高(厘米)',
                'required'=>false,
                'label_attr'=>[
                    'class'=>'padding-rightless'
                ],
                'attr'=>[
                    'placeholder'=>'身高'
                ]
            ])
            ->add('weight',NumberType::class,[
                'label'=>'体重(公斤)',
                'required'=>false,
                'label_attr'=>[
                    'class'=>'padding-rightless'
                ],
                'attr'=>[
                    'placeholder'=>'体重'
                ]
            ])
            ->add('fuwei',NumberType::class,[
                'label'=>'腹围(厘米)',
                'required'=>false,
                'label_attr'=>[
                    'class'=>'padding-rightless'
                ],
                'attr'=>[
                    'placeholder'=>'腹围',                                    
                ]
            ])
            ->add('gender',EntityType::class,[
                'class'=>Options::class,
                'choices'=>$this->optionsRespository->findChirenOptions(1),
                'attr'=>[
                    'data-toggle'=>'tooltip',
                    'title'=>'请选择性别'
                ],
                'label'=>'性别',
                'choice_label'=>'title',
                'required'=>false,
                ])
            ->add('scholarship',EntityType::class,[
                'class'=>Options::class,
                'choices'=>$this->optionsRespository->findChirenOptions(4),
                'label'=>'文化程度',
                'choice_label'=>'title',
                'required'=>false,
                ])
            ->add('marriage',EntityType::class,[
                'class'=>Options::class,
                'choices'=>$this->optionsRespository->findChirenOptions(10),
                'label'=>'婚姻状况',
                'choice_label'=>'title',
                'required'=>false,
              ])
              ->add('career',EntityType::class,[
                  'class'=>Options::class,
                  'choices'=>$this->optionsRespository->findChirenOptions(15),
                  'required'=>false,
                  'label'=>'职业',
                  'choice_label'=>'title'
             ])
             ->add('yibao',EntityType::class,[
                 'class'=>Options::class,
                 'choices'=>$this->optionsRespository->findChirenOptions(21),
                 'label'=>'医保类型',
                 'choice_label'=>'title',
                 'required'=>false,
              ])
              
              ->add('jyyw',EntityType::class,[
                  'class'=>Options::class,
                  'choices'=>$this->optionsRespository->findChirenOptions(25),
                  'multiple'=>true,
                  'label'=>'降压药物',
                  'choice_label'=>'title',
                  'required'=>false,                 
                  ])
              ->add('gxykzqk',EntityType::class,[
                  'class'=>Options::class,
                  'choices'=>$this->optionsRespository->findChirenOptions(33),
                  'label'=>'控制情况',
                  'choice_label'=>'title',
                  'required'=>false,
                  ])
              ->add('jtyw',EntityType::class,[
                  'class'=>Options::class,
                  'choices'=>$this->optionsRespository->findChirenOptions(37),
                  'multiple'=>true,
                  'label'=>'降糖药物',
                  'choice_label'=>'title',
                  'required'=>false,
                  ])
              ->add('tnbkzqk',EntityType::class,[
                  'class'=>Options::class,
                  'choices'=>$this->optionsRespository->findChirenOptions(33),
                  'label'=>'降糖控制情况',
                  'choice_label'=>'title',
                  'required'=>false,
                  ])
              ->add('jzyw',EntityType::class,[
                  'class'=>Options::class,
                  'choices'=>$this->optionsRespository->findChirenOptions(46),
                  'multiple'=>true,
                  'label'=>'降脂药物',
                  'choice_label'=>'title',
                  'required'=>false,
                  ])
              ->add('gxzkzqk',EntityType::class,[
                  'class'=>Options::class,
                  'choices'=>$this->optionsRespository->findChirenOptions(33),
                  'label'=>'高血脂控制情况',                 
                  'choice_label'=>'title',
                  'required'=>false,
                  ])
              ->add('xyqk',EntityType::class,[
                  'class'=>Options::class,
                  'choices'=>$this->optionsRespository->findChirenOptions(50),
                  'label'=>'吸烟情况',
                  'choice_label'=>'title',
                  'required'=>false,
                ])
                
            ->add('xyqkzhi',null,[                           
                'attr'=>[
                    'placeholder'=>'支/天'
                ],
                'label'=>'吸烟情况 支/天',                
                'required'=>false,
                ])
            ->add('xyqkyear',null,[                
                'attr'=>[
                    'placeholder'=>'年'
                ],
                'label'=>'吸烟情况 年',                
                'required'=>false,
            ]) 
            
            ->add('yjqk',EntityType::class,[
                'class'=>Options::class,
                'choices'=>$this->optionsRespository->findChirenOptions(54),
                'label'=>'饮酒',
                'choice_label'=>'title',
                'required'=>false,
                ])
                
                ->add('yjqkliang',null,[
                    'attr'=>[
                        'placeholder'=>'两/天'
                    ],
                    'label'=>'饮酒情况 两/天',
                    'required'=>false,
                ])
                ->add('yjqkyear',null,[
                    'attr'=>[
                        'placeholder'=>'年'
                    ],
                    'label'=>'饮酒情况 年',
                    'required'=>false,
                ]) 
                ->add('tfyw',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(61),
                    'multiple'=>true,
                    'label'=>'痛风',
                    'choice_label'=>'title',
                    'required'=>false,
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
