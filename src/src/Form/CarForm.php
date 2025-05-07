<?php

namespace App\Form;

use App\Entity\Car;
use Doctrine\ORM\Query\Expr\Select;
use Dom\Text;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CarForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('brand', TextType::class, [
                'label' => 'Marca',
            ])
            ->add('model', TextType::class, [
                'label' => 'Modelo',
            ])
            ->add('version', TextType::class, [
                'label' => 'Versão',
            ])
            ->add('year', ChoiceType::class, [
                'label' => 'Ano',
                'choices' => array_combine(
                    range(date('Y'), 1980),  // Exibe do ano atual até 1980
                    range(date('Y'), 1980)
                ),
                'placeholder' => 'Selecione um ano',
            ])
            ->add('fipe_price', MoneyType::class, [
                'divisor' => 100,
                'currency' => 'BRL',
                'label' => 'Preço FIPE',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Car::class,
        ]);
    }
}
