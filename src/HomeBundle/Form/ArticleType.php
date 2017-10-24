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
## CODE OBLIGATOIRE ?        
			->add('libelle')

			->add('typeArt', ChoiceType::class, 
					array(
						'choices'  => array('Article commercial' => "commercial",'Article montée' => "montee"),
						) 
				)			

			->add('prixA')
			->add('marge1')
			->add('marge2')
			->add('marge3')

# prix detail 1 et 2
			->add('prixGros')			
			
			->add('prixAht')
			->add('prixHt')
 
			->add('prixAttc')			
			->add('prixV')


			->add('tva')
			->add('fdc')
			->add('margeMax')

			->add('rem')								

			->add('fournisseur', EntityType::class, 
				array('class' => 'HomeBundle:Fournisseur','choice_label' => 'nomFournisseur')
			)

			->add('familleArticle', EntityType::class, 
				array('class' => 'HomeBundle:FamilleArticle','choice_label' => 'nomFamille')
			)			

			->add('rayon')
			->add('etage')
			->add('unit')			

			->add('stock')
			->add('stockMin')			
			->add('stockMax')			
			->add('stockAlert')			

/*			->add('dateCreation')*/


/*			->add('prixRevient')
			->add('prixDet')

			->add('marge')
			->add('marged')

			->add('codSoc')
			->add('useCreation')
			->add('username')

			->add('stkmag')
			->add('charge')
			->add('coef')
			->add('devise')
			->add('const')
			->add('idsfam')
			->add('refCode')

			->add('prixEuro')

			->add('cal')


			->add('pr')
			->add('code')
			->add('codeUser')*/

			;
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
