<?php

namespace HomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('libelle')
			->add('prixA')
			->add('marge1')
			->add('marge2')
			->add('marge3')
			
			->add('prixAht')
			->add('prixHt')

			->add('prixAttc')			
			->add('prixV')

			->add('prixRevient')

			->add('prixDet')
			->add('unit')
			->add('tva')
			->add('stock')
			->add('stockAlert')
			->add('marge')
			->add('marged')
			->add('margeMax')
			->add('rem')
			->add('stockMin')
			->add('fdc')
			->add('idFamille')
			->add('rayon')
			->add('etage')
			->add('codSoc')
			->add('useCreation')
			->add('username')
			->add('dateCreation')
			->add('stkmag')
			->add('charge')
			->add('coef')
			->add('devise')
			->add('const')
			->add('idsfam')
			->add('refCode')
			->add('stkmax')
			->add('prixEuro')
			->add('prixGros')

			->add('libFam')
			->add('cal')
			->add('fournisseur', EntityType::class, 
				array('class' => 'HomeBundle:Fournisseur','choice_label' => 'nomFournisseur')
			)

			->add('pr')
			->add('code')
			->add('codeUser')
			->add('typeArt', ChoiceType::class, 
					array(
						'choices'  => array('Article commercial' => "commercial",'Article montée' => "montee"),
						) 
				);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HomeBundle\Entity\Article'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'homebundle_article';
    }


}
