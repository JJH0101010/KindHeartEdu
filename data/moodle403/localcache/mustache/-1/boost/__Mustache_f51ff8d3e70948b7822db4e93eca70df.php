<?php

class __Mustache_f51ff8d3e70948b7822db4e93eca70df extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core_form/element-text-inline')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
