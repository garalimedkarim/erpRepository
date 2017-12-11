<?php

namespace HomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class LanguageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('language', ChoiceType::class, array(
            'choices'  => array(
                'FR' => 5,
                'EN' => 1,
             ),
            'label'      => ' ',
            //'attr' => array('style' => 'float:left;width:40%'),
        ))
        ->add('level', ChoiceType::class, array(
            'choices'  => array(
                'Good' => 5,
                'Bad' => 1,
             ),
            'label'      => ' ',
            //'attr' => array('style' => 'float:left;width:40%'),
        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HomeBundle\Entity\Language'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'homebundle_language';
    }


}
