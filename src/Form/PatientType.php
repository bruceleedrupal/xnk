<?php

namespace App\Form;

use App\Entity\Patient;
use App\Form\BirthdayType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
//use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


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
            ]);           
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Patient::class,
        ]);
    }
}
