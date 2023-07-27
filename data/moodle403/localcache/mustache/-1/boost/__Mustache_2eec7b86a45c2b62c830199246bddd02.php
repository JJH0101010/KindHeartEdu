<?php

class __Mustache_2eec7b86a45c2b62c830199246bddd02 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="searchresults" aria-live="off" class="no-overflow" style="max-height: 10em">
';
        $value = $context->find('templates');
        if (empty($value)) {
            
            $buffer .= $indent . '<p class="text-warning">';
            $value = $context->find('str');
            $buffer .= $this->section8699a05a369faccc95420a4b9269db74($context, $indent, $value);
            $buffer .= '</p>
';
        }
        $buffer .= $indent . '<ul>
';
        $value = $context->find('templates');
        $buffer .= $this->sectionD1bcfff0006ca7867268ff565830b0d7($context, $indent, $value);
        $buffer .= $indent . '</ul>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section8699a05a369faccc95420a4b9269db74(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'noresults, tool_templatelibrary';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'noresults, tool_templatelibrary';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1bcfff0006ca7867268ff565830b0d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<li data-templatename="{{.}}"><a href="#">{{.}}</a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<li data-templatename="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><a href="#">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
