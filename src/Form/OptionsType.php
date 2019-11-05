<?php

namespace App\Form;

use App\Entity\Options;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OptionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $required=false;
        $formData =$builder->getForm()->getData();       
        if($formData->getParent()){
            $required=true;
        }
        
        $builder
            ->add('title')            
            ->add('parent',OptionType::class,[
                'class'=>Options::class,
                'selectType'=>'flatexcept',
                'required'=>$required,
                'lvl'=>0,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Options::class,
        ]);
    }
}
