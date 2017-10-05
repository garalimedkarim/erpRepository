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
        $builder
			// ->setAction($this->generateUrl('target_route'))
			// ->setMethod('GET')
			->add('nomFournisseur', null, array(
				'label'      => 'Nom Fournisseur',		
			))
			->add('adresse', null, array(
				'label'      => 'Adresse',
			))
			->add('ville', null, array(
				'label'      => 'Ville',
			))
			->add('codeTva', null, array(
				'label'      => 'Code TVA',
			))
			->add('tel', null, array(
				'label'      => 'Telephone',

			))
			->add('tel1', null, array(
				'label'      => 'Telephone 1',

			))			
			->add('tel2', null, array(
				'label'      => 'Telephone 2',

			))

			->add('fax', null, array(
				'label'      => 'Fax',

			))
			->add('contact', null, array(
				'label'      => 'Contact',

			))
			->add('gsm', null, array(
				'label'      => 'GSM',

			))
			->add('contact1', null, array(
				'label'      => 'Contact 1',

			))
			->add('gsm1', null, array(
				'label'      => 'GSM 1',

			))
			->add('contact2', null, array(
				'label'      => 'Contact 2',

			))			
			->add('gsm2', null, array(
				'label'      => 'GSM 2',

			))

			->add('contact3', null, array(
				'label'      => 'Contact 3',

			))
			->add('gsm3', null, array(
				'label'      => 'GSM 3',

			))
			->add('echange', null, array(
				'label'      => 'Echange',

			))
			->add('modereg', null, array(
				'label'      => 'Mode de réglement',

			))
			->add('mail', null, array(
				'label'      => 'Mail',

			))
			->add('postal', null, array(
				'label'      => 'Code Postal',

			))
			->add('frs', null, array(
				'label'      => 'FRS',

			))
			->add('famille', null, array(
				'label'      => 'Famille',

			))
			->add('remise', null, array(
				'label'      => 'Remise',

			))
			->add('solde', null, array(
				'label'      => 'Solde',

			))
			->add('timbre', null, array(
				'label'      => 'Timbre',

			))
			// ->add('idfam')
			;
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
