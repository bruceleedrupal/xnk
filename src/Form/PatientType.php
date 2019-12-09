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
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

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
                    'class'=>'input-group form-control p-0 border-0'
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
                    'label'=>'既往心梗',
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
                
                ->add('ssy',NumberType::class,[
                    'label'=>'收缩压(mmHg)',   
                    'attr'=>[
                        'placeHolder'=>'收缩压'
                    ],
                    'required'=>false,
                    'html5'=>true,
                ])
                ->add('szy',NumberType::class,[
                    'label'=>'舒张压(mmHg)',
                    'required'=>false,
                    'attr'=>[
                        'placeHolder'=>'舒张压'
                    ],
                    'html5'=>true,
                ])
                ->add('xl',NumberType::class,[
                    'label'=>'心率(次/分)',
                    'required'=>false,
                    'attr'=>[
                        'placeHolder'=>'心率'
                    ],
                    'html5'=>true,
                ])
                ->add('hx',NumberType::class,[
                    'label'=>'呼吸(次/分)',
                    'required'=>false,
                    'html5'=>true,
                    'attr'=>[
                        'placeHolder'=>'呼吸'
                    ],
                ])
                ->add('tw',NumberType::class,[
                    'label'=>'体温(℃)',
                    'required'=>false,
                    'html5'=>true,
                    'attr'=>[
                        'step'=>'0.1',
                        'placeHolder'=>'体温'
                    ]
                ])
                ->add('sfxyzt',ChoiceType::class,[
                    'label'=>'是否吸氧',
                    'required'=>false, 
                    'choices'=>[
                        '否'=>0,
                        '是'=>1,                        
                    ],
                    'placeholder'=>'是否吸氧状态',                    
                ])
                ->add('jpybhd',PercentType::class,[
                    'label'=>'经皮氧饱和度',
                    'required'=>false,                    
                    'attr'=>[                 
                        'placeHolder'=>'经皮氧饱和度',                        
                    ],                  
                ])
                
                ->add('cm',NumberType::class,[
                    'label'=>'超敏CRP(mg/L)',
                    'required'=>false,
                    'html5'=>true,
                    'attr'=>[       
                        'step'=>0.1,
                        'placeHolder'=>'超敏'
                    ]
                ])
                ->add('xj',NumberType::class,[
                    'label'=>'血钾(mmol/L)',
                    'required'=>false,
                    'html5'=>true,
                    'attr'=>[
                        'step'=>0.1,
                        'placeHolder'=>'血钾'
                    ]
                ])
                ->add('xn',NumberType::class,[
                    'label'=>'血钠(mmol/L)',
                    'required'=>false,
                    'html5'=>true,
                    'attr'=>[
                        'step'=>0.1,
                        'placeHolder'=>'血钠'
                    ]
                ])
                ->add('xlv',NumberType::class,[
                    'label'=>'血氯(mmol/L)',
                    'required'=>false,
                    'html5'=>true,
                    'attr'=>[
                        'step'=>0.1,
                        'placeHolder'=>'血氯'
                    ]
                ])
                ->add('jx',NumberType::class,[
                    'label'=>'肌酐(umol/L)',
                    'required'=>false,
                    'html5'=>true,
                    'attr'=>[
                        'step'=>0.1,
                        'placeHolder'=>'肌酐'
                    ]
                ])
                ->add('egfr',NumberType::class,[
                    'label'=>'eGFRMDRD(ml/min/1.73m2)',
                    'required'=>false,
                    'html5'=>true,
                    'attr'=>[
                        'step'=>0.1,
                        'placeHolder'=>'eGFRMDRD'
                    ]
                ])
                ->add('kfxt',NumberType::class,[
                    'label'=>'空腹血糖(mmol/L)',
                    'required'=>false,
                    'html5'=>true,
                    'attr'=>[
                        'step'=>0.1,
                        'placeHolder'=>'空腹血糖'
                    ]
                ])
                ->add('hba1c',PercentType::class,[
                    'label'=>'HbA1c',
                    'required'=>false,
                    'attr'=>[
                        'placeHolder'=>'HbA1c'
                    ]
                ])
                ->add('jgdbi',NumberType::class,[
                    'label'=>'肌钙蛋白I峰值(ng/ml)',
                    'required'=>false,
                    'attr'=>[
                        'step'=>0.1,
                        'placeHolder'=>'肌钙蛋白I'
                    ]
                ])
                ->add('jgdbt',NumberType::class,[
                    'label'=>'肌钙蛋白T峰值(ng/ml)',
                    'required'=>false,
                    'attr'=>[
                        'step'=>0.1,
                        'placeHolder'=>'肌钙蛋白T'
                    ]
                ])
                ->add('ckmb',NumberType::class,[
                    'label'=>'CK-MB峰值(IU/L)',
                    'required'=>false,
                    'attr'=>[
                        'step'=>0.1,
                        'placeHolder'=>'CK-MB峰值'
                    ]
                ])
                ->add('bnp',NumberType::class,[
                    'label'=>'BNP(pg/ml)',
                    'required'=>false,
                    'attr'=>[
                        'step'=>0.1,
                        'placeHolder'=>'BNP'
                    ]
                ])
                
                ->add('xhdb',NumberType::class,[
                    'label'=>'血红蛋白(g/L)',
                    'required'=>false,
                    'attr'=>[
                        'step'=>0.1,
                        'placeHolder'=>'血红蛋白'
                    ]
                ])
                
                ->add('hxbyj',PercentType::class,[
                    'label'=>'红细胞压积',
                    'required'=>false,
                    'scale'=>0,
                    'attr'=>[                       
                        'placeHolder'=>'红细胞压积'
                    ]
                ])
                
                ->add('gysz',NumberType::class,[
                    'label'=>'甘油三酯(mmol/L)',
                    'required'=>false,
                    'attr'=>[
                        'step'=>0.1,
                        'placeHolder'=>'甘油三酯'
                    ]
                ])
                
                ->add('zdgc',NumberType::class,[
                    'label'=>'总胆固醇(mmol/L)',
                    'required'=>false,
                    'attr'=>[
                        'step'=>0.1,
                        'placeHolder'=>'总胆固醇'
                    ]
                ])
                ->add('hdlc',NumberType::class,[
                    'label'=>'HDL-C(mmol/L)',
                    'required'=>false,
                    'attr'=>[
                        'step'=>0.1,
                        'placeHolder'=>'HDL-C'
                    ]
                ])
                ->add('ldlc',NumberType::class,[
                    'label'=>'LDL-C(mmol/L)',
                    'required'=>false,
                    'attr'=>[
                        'step'=>0.1,
                        'placeHolder'=>'LDL-C'
                    ]
                ])
                ->add('ns',NumberType::class,[
                    'label'=>'尿酸(umol/L)',
                    'required'=>false,
                    'attr'=>[
                        'step'=>0.1,
                        'placeHolder'=>'尿酸'
                    ]
                ])
                ->add('nt',NumberType::class,[
                    'label'=>'NT pro-BNP',
                    'required'=>false,
                    'attr'=>[
                        'step'=>0.1,
                        'placeHolder'=>'NT pro-BNP'
                    ]
                ])

                ->add('lvef',PercentType::class,[
                    'label'=>'LVEF',
                    'required'=>false,
                    'attr'=>[
                        'placeHolder'=>'LVEF'
                    ]
                ])
                
                ->add('zgzfs',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(160),
                    'label'=>'再灌注方式',
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                ->add('jzyybb',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(166),
                    'label'=>'就诊医院版本',
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                ->add('jzyy',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(170),
                    'label'=>'就诊医院',
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                ->add('zjfs',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(176),
                    'label'=>'就诊方式',
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                ->add('yqxdtcs',CheckboxType::class,[
                    'label'=>'有院前心电图传输',
                    'attr'=>[
                        'class'=>'icheck-primary ml-1'
                    ],
                    'required'=>false,
                ])
                
                ->add('zyjl',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(182),
                    'label'=>'转运距离(公里)',
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                
                ->add('aspl',CheckboxType::class,[
                    'label'=>'阿司匹林',
                    'attr'=>[
                        'class'=>'icheck-primary ml-1'
                    ],
                    'required'=>false,
                ])
                ->add('lbgl',CheckboxType::class,[
                    'label'=>'氯吡格雷',
                    'attr'=>[
                        'class'=>'icheck-primary ml-1'
                    ],
                    'required'=>false,
                ])
                ->add('tgrl',CheckboxType::class,[
                    'label'=>'替格瑞洛',
                    'attr'=>[
                        'class'=>'icheck-primary ml-1'
                    ],
                    'required'=>false,
                ])
                ->add('dfzgs',NumberType::class,[
                    'label'=>'低分子肝素',
                    'html5'=>true,                    
                    'required'=>false,
                ])
                ->add('bzzj',CheckboxType::class,[
                    'label'=>'β阻滞剂',
                    'attr'=>[
                        'class'=>'icheck-primary ml-1'
                    ],
                    'required'=>false,
                ])
                ->add('zytt',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(79),
                    'label'=>'他汀',
                    'multiple'=>true,
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                ->add('yzmb',CheckboxType::class,[
                    'label'=>'依折麦布',
                    'attr'=>[
                        'class'=>'icheck-primary ml-1'
                    ],
                    'required'=>false,
                ])
                ->add('acei',CheckboxType::class,[
                    'label'=>'ACEI',
                    'attr'=>[
                        'class'=>'icheck-primary ml-1'
                    ],
                    'required'=>false,
                ])
                ->add('arb',CheckboxType::class,[
                    'label'=>'ARB',
                    'attr'=>[
                        'class'=>'icheck-primary ml-1'
                    ],
                    'required'=>false,
                ])
                ->add('lnj',EntityType::class,[
                    'class'=>Options::class,
                    'choices'=>$this->optionsRespository->findChirenOptions(187),
                    'label'=>'利尿剂',
                    'multiple'=>true,
                    'choice_label'=>'title',
                    'required'=>false,
                ])
                ->add('atst',CheckboxType::class,[
                    'label'=>'安体舒通',
                    'attr'=>[
                        'class'=>'icheck-primary ml-1'
                    ],
                    'required'=>false,
                ])
                ->add('dba',NumberType::class,[
                    'label'=>'多巴胺',
                    'html5'=>true,
                    'required'=>false,
                ])
                ->add('dbada',NumberType::class,[
                    'label'=>'多巴酚丁胺',
                    'html5'=>true,
                    'required'=>false,
                ])
                ->add('mln',NumberType::class,[
                    'label'=>'米力农',
                    'html5'=>true,
                    'required'=>false,
                ])
                ->add('zxmd',NumberType::class,[
                    'label'=>'左昔孟旦',
                    'html5'=>true,
                    'required'=>false,
                ])
                ->add('xhs',NumberType::class,[
                    'label'=>'新活素',
                    'html5'=>true,
                    'required'=>false,
                ])
                ->add('kdlz',NumberType::class,[
                    'label'=>'可达龙针',
                    'html5'=>true,
                    'required'=>false,
                ])
                ->add('adlp',NumberType::class,[
                    'label'=>'可达龙片',
                    'html5'=>true,
                    'required'=>false,
                ])
                ->add('ldky',NumberType::class,[
                    'label'=>'利多卡因',
                    'html5'=>true,
                    'required'=>false,
                ])
                ->add('ldky',NumberType::class,[
                    'label'=>'无创辅助通气',
                    'html5'=>true,
                    'required'=>false,
                ])
                ->add('yctqzc',NumberType::class,[
                    'label'=>'有创通气支持',
                    'html5'=>true,
                    'required'=>false,
                ])
                ->add('iabp',NumberType::class,[
                    'label'=>'IABP',
                    'html5'=>true,
                    'required'=>false,
                ])
                ->add('ecmo',NumberType::class,[
                    'label'=>'ECMO',
                    'html5'=>true,
                    'required'=>false,
                ])
                ->add('zcysy',CheckboxType::class,[
                    'label'=>'中成药输液',
                    'attr'=>[
                        'class'=>'icheck-primary ml-1'
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
