<?php

class __Mustache_1aad67a9cd11eecb4c70400bdcec8701 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="d-flex flex-column h-100">
';
        $buffer .= $indent . '    <div class="d-none flex-grow-1 align-items-start" data-collapse="expandbutton">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('collapsedicon'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="d-flex" data-collapse="content">
';
        $buffer .= $indent . '        <div class="d-flex flex-grow-1">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('headerlink'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('arrow'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('singleview'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="d-flex flex-grow-1 align-items-end">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('statusicons'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
