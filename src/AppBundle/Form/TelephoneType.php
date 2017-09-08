<?php
/**
 * Created by PhpStorm.
 * User: kciesielski
 * Date: 08.09.17
 * Time: 18:35
 */

namespace AppBundle\Form;

use AppBundle\Entity\AB\Telephone;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TelephoneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('mobileNo');

        $builder->add('homeNo');

        $builder->add('workNo');

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Telephone::class,
        ));
    }
}