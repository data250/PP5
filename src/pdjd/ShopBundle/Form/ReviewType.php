<?php
namespace pdjd\ShopBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReviewType extends AbstractType{

 public function getName() {
       return 'review';
   }
	
	public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
				
                ->add('title', 'text', array('label' => 'Temat'))				
				->add('description', 'textarea', array('label' => 'Recenzja'
				->add('save', 'submit', array('label' => 'Dodaj'));
    }
	
	  public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array('data_class' => 'pdjd\ShopBundle\Entity\Review'));
}
}