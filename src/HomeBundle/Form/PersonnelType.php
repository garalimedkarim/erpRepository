<?php

namespace HomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class PersonnelType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('sexe',ChoiceType::class, array(
                    'choices'  => array(
                        'Homme' => "Homme",
                        'Femme' => "Femme",
                    ),)
            )
            ->add('cin')
            ->add('dateNaissance', DateType::class, array(
                'widget' => 'single_text',
                // this is actually the default format for single_text
                'format' => 'yyyy-MM-dd',
            ))
            ->add('nationalite')
            ->add('gouvernerat')
            ->add('ville')
            ->add('adresse')
            ->add('codePostale')
            ->add('tel1')
            ->add('tel2')
            ->add('tel3')
            ->add('mail1')
            ->add('mail2')
            ->add('statutSociale',ChoiceType::class, array(
                    'choices'  => array(
                        'Célibataire' => "Célibataire",
                        'Marié' => "Marié",
                        'Marié + Enfants' => "Marié + Enfants",
                    ),)
            )
            ->add('permisVoiture',  CheckboxType::class, array(
                    'attr' => array(
                        'style'=>'width:auto;margin-top:8px',
                    ),
                )
            )
            ->add('profession')
            ->add('societe')
            ->add('niveauScolaire')
            ->add('formations')
            ->add('competances')
            ->add('activitePrefere')
            ->add('activitePrecedente')
            ->add('tempsLibre')
            ->add('plusADonner')
            ->add('remarques')
            ->add('facebook')
            ->add('twitter')
            ->add('skype')
            ->add('statutAssociation',ChoiceType::class, array(
                    'choices'  => array(
                        'Ouvrier' => "Ouvrier",
                        'Cadre' => "Cadre",
                        'Manager' => "Manager",
                    ),)
            )
            ->add('dateInscription', DateType::class, array(
                'widget' => 'single_text',
                // this is actually the default format for single_text
                'format' => 'yyyy-MM-dd',
            ))

            ->add("languages",CollectionType::class, array(
                    'entry_type' => LanguageType::class,
                    'entry_options' => array("label"=>false),
                    'allow_add' => true,
                    'allow_delete' => true,
                ))
                ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HomeBundle\Entity\Personnel'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'homebundle_personnel';
    }


}
