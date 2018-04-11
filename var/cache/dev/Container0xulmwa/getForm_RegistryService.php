<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.registry' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormRegistryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormRegistry.php';

return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(array('AppBundle\\Form\\ApprenantType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\ApprenantType']) ? $this->services['AppBundle\Form\ApprenantType'] : $this->services['AppBundle\Form\ApprenantType'] = new \AppBundle\Form\ApprenantType()) && false ?: '_'};
}, 'AppBundle\\Form\\AvisType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\AvisType']) ? $this->services['AppBundle\Form\AvisType'] : $this->services['AppBundle\Form\AvisType'] = new \AppBundle\Form\AvisType()) && false ?: '_'};
}, 'AppBundle\\Form\\EnseignerType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\EnseignerType']) ? $this->services['AppBundle\Form\EnseignerType'] : $this->services['AppBundle\Form\EnseignerType'] = new \AppBundle\Form\EnseignerType()) && false ?: '_'};
}, 'AppBundle\\Form\\EtablissementClasseType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\EtablissementClasseType']) ? $this->services['AppBundle\Form\EtablissementClasseType'] : $this->services['AppBundle\Form\EtablissementClasseType'] = new \AppBundle\Form\EtablissementClasseType()) && false ?: '_'};
}, 'AppBundle\\Form\\EtablissementProfType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\EtablissementProfType']) ? $this->services['AppBundle\Form\EtablissementProfType'] : $this->services['AppBundle\Form\EtablissementProfType'] = new \AppBundle\Form\EtablissementProfType()) && false ?: '_'};
}, 'AppBundle\\Form\\EtablissementType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\EtablissementType']) ? $this->services['AppBundle\Form\EtablissementType'] : $this->services['AppBundle\Form\EtablissementType'] = new \AppBundle\Form\EtablissementType()) && false ?: '_'};
}, 'AppBundle\\Form\\EtsClasseNiveauSpecialiteType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\EtsClasseNiveauSpecialiteType']) ? $this->services['AppBundle\Form\EtsClasseNiveauSpecialiteType'] : $this->services['AppBundle\Form\EtsClasseNiveauSpecialiteType'] = new \AppBundle\Form\EtsClasseNiveauSpecialiteType()) && false ?: '_'};
}, 'AppBundle\\Form\\ExamenType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\ExamenType']) ? $this->services['AppBundle\Form\ExamenType'] : $this->services['AppBundle\Form\ExamenType'] = new \AppBundle\Form\ExamenType()) && false ?: '_'};
}, 'AppBundle\\Form\\ExploitType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\ExploitType']) ? $this->services['AppBundle\Form\ExploitType'] : $this->services['AppBundle\Form\ExploitType'] = new \AppBundle\Form\ExploitType()) && false ?: '_'};
}, 'AppBundle\\Form\\InformationType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\InformationType']) ? $this->services['AppBundle\Form\InformationType'] : $this->services['AppBundle\Form\InformationType'] = new \AppBundle\Form\InformationType()) && false ?: '_'};
}, 'AppBundle\\Form\\MatiereType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\MatiereType']) ? $this->services['AppBundle\Form\MatiereType'] : $this->services['AppBundle\Form\MatiereType'] = new \AppBundle\Form\MatiereType()) && false ?: '_'};
}, 'AppBundle\\Form\\NoteType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\NoteType']) ? $this->services['AppBundle\Form\NoteType'] : $this->services['AppBundle\Form\NoteType'] = new \AppBundle\Form\NoteType()) && false ?: '_'};
}, 'AppBundle\\Form\\ProfType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\ProfType']) ? $this->services['AppBundle\Form\ProfType'] : $this->services['AppBundle\Form\ProfType'] = new \AppBundle\Form\ProfType()) && false ?: '_'};
}, 'AppBundle\\Form\\ProgrammeCoursType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\ProgrammeCoursType']) ? $this->services['AppBundle\Form\ProgrammeCoursType'] : $this->services['AppBundle\Form\ProgrammeCoursType'] = new \AppBundle\Form\ProgrammeCoursType()) && false ?: '_'};
}, 'AppBundle\\Form\\StatPeriodiqueType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\StatPeriodiqueType']) ? $this->services['AppBundle\Form\StatPeriodiqueType'] : $this->services['AppBundle\Form\StatPeriodiqueType'] = new \AppBundle\Form\StatPeriodiqueType()) && false ?: '_'};
}, 'AppBundle\\Form\\TuteurType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\TuteurType']) ? $this->services['AppBundle\Form\TuteurType'] : $this->services['AppBundle\Form\TuteurType'] = new \AppBundle\Form\TuteurType()) && false ?: '_'};
}, 'AppBundle\\Form\\Type\\TelType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\Type\TelType']) ? $this->services['AppBundle\Form\Type\TelType'] : $this->services['AppBundle\Form\Type\TelType'] = new \AppBundle\Form\Type\TelType()) && false ?: '_'};
}, 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
    return ${($_ = isset($this->services['form.type.entity']) ? $this->services['form.type.entity'] : $this->load(__DIR__.'/getForm_Type_EntityService.php')) && false ?: '_'};
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
    return ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->load(__DIR__.'/getForm_Type_ChoiceService.php')) && false ?: '_'};
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
    return ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->load(__DIR__.'/getForm_Type_FormService.php')) && false ?: '_'};
})), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->load(__DIR__.'/getForm_TypeExtension_Form_HttpFoundationService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->load(__DIR__.'/getForm_TypeExtension_Form_ValidatorService.php')) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->load(__DIR__.'/getForm_TypeExtension_Upload_ValidatorService.php')) && false ?: '_'};
    yield 3 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->load(__DIR__.'/getForm_TypeExtension_CsrfService.php')) && false ?: '_'};
    yield 4 => ${($_ = isset($this->services['form.type_extension.form.data_collector']) ? $this->services['form.type_extension.form.data_collector'] : $this->load(__DIR__.'/getForm_TypeExtension_Form_DataCollectorService.php')) && false ?: '_'};
}, 5), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()) && false ?: '_'};
}, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()) && false ?: '_'};
}, 1)), new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->load(__DIR__.'/getForm_TypeGuesser_ValidatorService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['form.type_guesser.doctrine']) ? $this->services['form.type_guesser.doctrine'] : $this->load(__DIR__.'/getForm_TypeGuesser_DoctrineService.php')) && false ?: '_'};
}, 2), NULL)), ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->load(__DIR__.'/getForm_ResolvedTypeFactoryService.php')) && false ?: '_'});
