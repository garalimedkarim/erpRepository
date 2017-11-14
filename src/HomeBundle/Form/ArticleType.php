<?php

namespace HomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use HomeBundle\Entity\Article;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PercentType ;
use Symfony\Component\Form\Extension\Core\Type\FileType;




class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
	/*if (empty($builder->getData()->getMarge1())?0:$builder->getData()->getMarge1()) */

        $builder
        	->add('photo', FileType::class, 
					array(
						'required'  => false,
						)
        	)	
			->add('code')        
			->add('libelle')

			->add('typeArt', ChoiceType::class, 
					array(
						'choices'  => Article::$articleTypes,
						) 
				)			

			->add('prixA', NumberType::class, array(
				    'empty_data' 		=> 0, 
				))
			->add('marge1', PercentType::class, array(
				    'type'		=> 'integer',
				))
			->add('marge2', PercentType::class, array(
					'type'		=> 'integer',					
				))
			->add('marge3', PercentType::class, array(
					'type'		=> 'integer',					
				))

			->add('prixDetail1', NumberType::class, array(
				    'attr' => array('disabled' => 'true')
				))			
			->add('prixDetail2', NumberType::class, array(
				    'attr' => array('disabled' => 'true')
				))			
			->add('prixGros', NumberType::class, array(
				    'attr' => array('disabled' => 'true')
				))			
			
			->add('prixAht', NumberType::class, array(
				    'empty_data' 		=> 0,
				))
			->add('prixHt', NumberType::class, array(
				    'empty_data' 		=> 0,
				))
 
			->add('prixAttc', NumberType::class, array(
				    'empty_data' 		=> 0,
				))			
			->add('prixV', NumberType::class, array(
				    'empty_data' 		=> 0,
				))


			->add('tva', ChoiceType::class, 
					array(
						'choices'  => Article::$tvaArray,
						) 
				)

			->add('fdc')
			->add('margeMax', NumberType::class, array(
				    'empty_data' 		=> 0,
				))

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
