<?php
/**
 * Created by PhpStorm.
 * User: kciesielski
 * Date: 08.09.17
 * Time: 18:30
 */

namespace AppBundle\Form;

use AppBundle\Entity\AB\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('city');

        $builder->add('street');

        $builder->add('houseNo');

        $builder->add('apartmentNo');

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Address::class,
        ));
    }
}