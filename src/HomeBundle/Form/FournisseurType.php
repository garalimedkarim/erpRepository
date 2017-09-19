<?php

namespace HomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FournisseurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomFournisseur')->add('adresse')->add('ville')->add('codeTva')->add('tel')->add('tel2')->add('tel1')->add('fax')->add('contact')->add('gsm')->add('contact1')->add('gsm1')->add('gsm2')->add('contact2')->add('contact3')->add('gsm3')->add('echange')->add('modereg')->add('mail')->add('postal')->add('frs')->add('famille')->add('remise')->add('solde')->add('timbre')->add('idfam');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HomeBundle\Entity\Fournisseur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'homebundle_fournisseur';
    }


}
