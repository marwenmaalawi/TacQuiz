<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Quiz;
use App\Repository\CategoryRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
class QuizType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {$id=$options['data']->getUser()->getId();

        $builder
            ->add('Category',EntityType::class,[
                 'class' => Category::class,
                'query_builder' => function (CategoryRepository $er) use ($id) {
                    return $er->createQueryBuilder('u')

                        ->where('u.User=:us')
                        ->setParameter('us',$id) ;

                }
            ])

            ->add('Title')
            ->add('date_quiz', DateType::class)
            ->add('image', FileType::class, [
                'mapped' => false,
                'required' => false,
            ])
            ->add('publicResult',CheckboxType::class, [
                'label_attr' => ['class' => 'switch-custom'],'required' => false,
            ])
            ->add('random',CheckboxType::class, [
        'label_attr' => ['class' => 'switch-custom'],'required' => false,
    ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Quiz::class,
        ]);
    }
}
