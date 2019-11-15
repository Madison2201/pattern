<?php
// Form
abstract class FormAbstract
{ }

class WindowsForm extends FormAbstract
{ }

class WebForm extends FormAbstract
{ }

// Button

abstract class ButtonAbstract
{ }

class WindowsButton extends ButtonAbstract
{ }

class WebButton extends ButtonAbstract
{ }

//Icon
abstract class IconAbstract
{ }

class WindowsIcon extends IconAbstract
{ }

class WebIcon extends IconAbstract
{ }

// Factory

abstract class FormBuilder
{
    abstract public function createForm();
    abstract public function createButton();
    abstract public function createIcon();
}

class WindowsFormBuilder extends FormBuilder
{
    public function createForm()
    {
        return new WindowsForm();
    }
    public function createButton()
    {
        return new WindowsButton();
    }
    public function createIcon()
    {
        return new WindowsIcon();
    }
}
class WebFormBuilder extends FormBuilder
{
    public function createForm()
    {
        return new WebForm();
    }
    public function createButton()
    {
        return new WebButton();
    }
    public function createIcon()
    {
        return new WebIcon();
    }
}
$builder = new WindowsFormBuilder();
$form = $builder->createForm();
$button = $builder->createButton();
$icon = $builder->createIcon();
function createScreen(
    FormAbstract $form,
    ButtonAbstract $button,
    IconAbstract $icon
) {
    //create screen
}

createScreen($form, $button, $icon);
