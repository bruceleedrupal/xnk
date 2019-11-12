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
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
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
                'attr'=>[
                    'class'=>'brucelee'
                ]
            ])
            ->add('tall',NumberType::class,[                
                'label'=>'身高(厘米)',
                'required'=>false,
                'html5'=>true,
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
                'html5'=>true,
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
                'html5'=>true,
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
                ->add('xjgs',CheckboxType::class,[               
                    'label'=>'心肌梗死',
                    'required'=>false,
                    'attr'=>[
                        'class'=>'icheck-primary'
                    ]                   
                ])
                ->add('jwxjt',CheckboxType::class,[
                    'label'=>'既往心绞痛',
                    'required'=>false,
                    'attr'=>[
                        'class'=>'icheck-primary ml-2'
                    ]
                ])
                ->add('pcibs',CheckboxType::class,[
                    'label'=>'PCI病史',
                    'attr'=>[
                        'class'=>'icheck-primary ml-2'
                    ],
                    'required'=>false,
                ])
                ->add('cabgbs',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(64),
                    'label'=>'CABG病史',
                    'multiple'=>true,
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                
                ->add('nzzbs',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(67),
                    'label'=>'脑卒中病史',                   
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                
                ->add('wzdmjb',CheckboxType::class,[
                    'label'=>'外周动脉疾病',
                    'required'=>false,
                    'attr'=>[
                        'class'=>'icheck-primary'
                    ]
                ])
                ->add('gxbjzs',CheckboxType::class,[
                    'label'=>'冠心病家族史',
                    'required'=>false,
                    'attr'=>[
                        'class'=>'icheck-primary ml-1'
                    ]
                ])
                ->add('hbexzl',CheckboxType::class,[
                    'label'=>'合并恶性肿瘤',
                    'attr'=>[
                        'class'=>'icheck-primary ml-3'
                    ],
                    'required'=>false,
                ])
                ->add('kxxbyw',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(71),
                    'label'=>'既往服用抗血小板药物',
                    'multiple'=>true,
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                ->add('knyw',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(76),
                    'label'=>'既往抗凝药物',
                    'multiple'=>true,
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                ->add('ttyy',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(79),
                    'label'=>'既往服用他汀',
                    'multiple'=>true,
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                
                ->add('xhdkybs',CheckboxType::class,[
                    'label'=>'消化道溃疡',
                    'required'=>false,
                    'attr'=>[
                        'class'=>'icheck-primary'
                    ]
                ])
                ->add('xgnbqbs',CheckboxType::class,[
                    'label'=>'肾功能',
                    'required'=>false,
                    'attr'=>[
                        'class'=>'icheck-primary ml-1'
                    ]
                ])
                ->add('tx',CheckboxType::class,[
                    'label'=>'透析',
                    'attr'=>[
                        'class'=>'icheck-primary ml-1'
                    ],
                    'required'=>false,
                ])
                ->add('copd',CheckboxType::class,[
                    'label'=>'COPD',
                    'attr'=>[
                        'class'=>'icheck-primary ml-1'
                    ],
                    'required'=>false,
                ])
                ->add('xxgjbjy',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(84),
                    'label'=>'参加过心血管疾病健康教育',
                    'multiple'=>true,
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                
                ->add('zgzzl',CheckboxType::class,[
                    'label'=>'听说过再灌注治疗',
                    'required'=>false,
                    'attr'=>[
                        'class'=>'icheck-primary'
                    ]
                ])
                ->add('pyywry',CheckboxType::class,[
                    'label'=>'近亲/朋友是医务人员',
                    'required'=>false,
                    'attr'=>[
                        'class'=>'icheck-primary ml-3'
                    ]
                ])
                ->add('pypci',CheckboxType::class,[
                    'label'=>'近亲/朋友PCI病史',
                    'attr'=>[
                        'class'=>'icheck-primary'
                    ],
                    'required'=>false,
                ])
                ->add('pyxjgsbs',CheckboxType::class,[
                    'label'=>'近亲/朋友心肌梗死',
                    'attr'=>[
                        'class'=>'icheck-primary ml-3'
                    ],
                    'required'=>false,
                ])
                ->add('fbsj',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(89),
                    'label'=>'发病时间',
                    'multiple'=>true,
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                ->add('fbdd',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(96),
                    'label'=>'发病地点',
                    'multiple'=>true,
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                
                ->add('yy',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(100),
                    'label'=>'诱因',
                    'multiple'=>true,
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                ->add('xtxm',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(106),
                    'label'=>'胸痛/胸闷部位',
                    'multiple'=>true,
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                ->add('bszz',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(112),
                    'label'=>'伴随症状',
                    'multiple'=>true,
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                ->add('xsqj',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(118),
                    'label'=>'发病后第一个向谁求助',
                    'multiple'=>true,
                    'choice_label'=>'title',
                    'required'=>false,
                ])                
                ->add('fbfyyw',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(125),
                    'label'=>'发病后服用药物',
                    'multiple'=>true,
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                ->add('yyjy',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(132),
                    'label'=>'犹豫是否就医及原因',
                    'multiple'=>true,
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                ->add('exxlsc',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(138),
                    'label'=>'恶性心律失常',
                    'multiple'=>true,
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                ->add('kippip',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(142),
                    'label'=>'Killip分级',
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                ->add('gsbw',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(147),
                    'label'=>'梗死部位',
                    'multiple'=>true,
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                
                
                ->add('zzdx',CheckboxType::class,[
                    'label'=>'症状典型',
                    'attr'=>[
                        'class'=>'icheck-primary'
                    ],
                    'required'=>false,
                ])
                ->add('ysxg',CheckboxType::class,[
                    'label'=>'意识得心梗',
                    'attr'=>[
                        'class'=>'icheck-primary ml-1'
                    ],
                    'required'=>false,
                ])               
                ->add('yqxtzt',CheckboxType::class,[
                    'label'=>'院前心跳骤停',
                    'attr'=>[
                        'class'=>'icheck-primary ml-1'
                    ],
                    'required'=>false,
                ])
                ->add('zszcdzz',CheckboxType::class,[
                    'label'=>'左束支阻滞',
                    'attr'=>[
                        'class'=>'icheck-primary'
                    ],
                    'required'=>false,
                ])
                ->add('yszcdzz',CheckboxType::class,[
                    'label'=>'右束支阻滞',
                    'attr'=>[
                        'class'=>'icheck-primary ml-3'
                    ],
                    'required'=>false,
                ])
                ->add('xfcd',CheckboxType::class,[
                    'label'=>'心房颤动',
                    'attr'=>[
                        'class'=>'icheck-primary ml-3'
                    ],
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
