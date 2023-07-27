<?php

class __Mustache_7ca6d860d7304df2fd21221489a79f59 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<span class="d-none" data-region="courseid" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" aria-hidden="true"></span>
';
        $value = $context->find('currentvalue');
        $buffer .= $this->section8f85341155719a5db39bde474d8100d5($context, $indent, $value);
        $value = $context->find('currentvalue');
        if (empty($value)) {
            
            $buffer .= $indent . '    ';
            if ($parent = $this->mustache->loadPartial('core/search_input_auto')) {
                $context->pushBlockContext(array(
                    'label' => array($this, 'block814af06d3af4a371818187214e913c1f'),
                    'placeholder' => array($this, 'block814af06d3af4a371818187214e913c1f'),
                ));
                $buffer .= $parent->renderInternal($context, $indent);
                $context->popBlockContext();
            }
        }

        return $buffer;
    }

    private function section25f70ea9e9e55a46015c0a8e133fddeb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            searchusers, core_grades
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '            searchusers, core_grades
';
                $buffer .= $indent . '        ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section53ad53ae17e6211e0a4f2f2b7ff2093f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clearsearch, gradereport_grader';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'clearsearch, gradereport_grader';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1334c11b5ab82eacb99d00f171e354a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clear';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'clear';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f85341155719a5db39bde474d8100d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{< core/search_input_auto }}
        {{$label}}{{#str}}
            searchusers, core_grades
        {{/str}}{{/label}}
        {{$value}}{{{currentvalue}}}{{/value}}
    {{/ core/search_input_auto }}
    <a class="ml-2 btn btn-link border-0" href="{{resetlink}}" data-action="resetpage" role="link" aria-label="{{#str}}clearsearch, gradereport_grader{{/str}}">
        {{#str}}clear{{/str}}
    </a>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                if ($parent = $this->mustache->loadPartial('core/search_input_auto')) {
                    $context->pushBlockContext(array(
                        'label' => array($this, 'block814af06d3af4a371818187214e913c1f'),
                        'value' => array($this, 'blockDf55c50bbfa3c76dbe2115223ea0a585'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $buffer .= '    <a class="ml-2 btn btn-link border-0" href="';
                $value = $this->resolveValue($context->find('resetlink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-action="resetpage" role="link" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section53ad53ae17e6211e0a4f2f2b7ff2093f($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '        ';
                $value = $context->find('str');
                $buffer .= $this->section1334c11b5ab82eacb99d00f171e354a6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block814af06d3af4a371818187214e913c1f($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section25f70ea9e9e55a46015c0a8e133fddeb($context, $indent, $value);
    
        return $buffer;
    }

    public function blockDf55c50bbfa3c76dbe2115223ea0a585($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('currentvalue'), $context);
        $buffer .= ($value === null ? '' : $value);
    
        return $buffer;
    }
}
