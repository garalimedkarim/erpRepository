<?php

namespace HomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;



class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
			->add('code')        
			->add('libelle')

			->add('typeArt', ChoiceType::class, 
					array(
						'choices'  => $builder->getData()->getArticleTypes(),
						) 
				)			

			->add('prixA', NumberType::class, array(
				    'scale' 	=> 3,
				    'grouping' 	=> true,
				))
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
