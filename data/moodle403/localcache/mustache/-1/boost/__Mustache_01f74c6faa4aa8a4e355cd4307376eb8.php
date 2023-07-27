<?php

class __Mustache_01f74c6faa4aa8a4e355cd4307376eb8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="list-templates">
';
        $buffer .= $indent . '    <form class="form-horizontal">
';
        $buffer .= $indent . '    ';
        if ($parent = $this->mustache->loadPartial('core_form/element-template')) {
            $context->pushBlockContext(array(
                'label' => array($this, 'block7e60e07d42b9f6b75b7686366ad81871'),
                'element' => array($this, 'block21723f48ffa9ea34488183cc091c2088'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        if ($parent = $this->mustache->loadPartial('core_form/element-template')) {
            $context->pushBlockContext(array(
                'element' => array($this, 'block94b12efba1301f6311b9772033f56975'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= '    </form>
';
        $buffer .= $indent . '    <hr/>
';
        if ($partial = $this->mustache->loadPartial('tool_templatelibrary/search_results')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <hr/>
';
        if ($partial = $this->mustache->loadPartial('tool_templatelibrary/display_template')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section74cabc12e9510cdad78fa92760dd6253($context, $indent, $value);

        return $buffer;
    }

    private function section4b4ede1b27dda18194700aaafae0c9a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'component, tool_templatelibrary';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'component, tool_templatelibrary';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32e423e2855b2b931357d3f3a8ae86d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'all, tool_templatelibrary';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'all, tool_templatelibrary';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e2875c627d2dbad7c957250bbb623f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selected';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2acfd7c7431a155b3b1d29141e0b466a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <option value="{{component}}" {{#selected}}selected{{/selected}}>{{name}}</option>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <option value="';
                $value = $this->resolveValue($context->find('component'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('selected');
                $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE97c05bd32d1e9cde582fcd6db417e84(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <optgroup label="{{type}}">
                        {{#plugins}}
                            <option value="{{component}}" {{#selected}}selected{{/selected}}>{{name}}</option>
                        {{/plugins}}
                    </optgroup>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <optgroup label="';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('plugins');
                $buffer .= $this->section2acfd7c7431a155b3b1d29141e0b466a($context, $indent, $value);
                $buffer .= $indent . '                    </optgroup>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a5212d39aeffe2d5a6f1bdb563520b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' search, tool_templatelibrary ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' search, tool_templatelibrary ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section74cabc12e9510cdad78fa92760dd6253(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'tool_templatelibrary/search\', \'tool_templatelibrary/display\']);
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'tool_templatelibrary/search\', \'tool_templatelibrary/display\']);
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block7e60e07d42b9f6b75b7686366ad81871($context)
    {
        $indent = $buffer = '';
        $buffer .= '            <div class="col-form-label">';
        $value = $context->find('str');
        $buffer .= $this->section4b4ede1b27dda18194700aaafae0c9a3($context, $indent, $value);
        $buffer .= '</div>
';
    
        return $buffer;
    }

    public function block21723f48ffa9ea34488183cc091c2088($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '            <select id="selectcomponent" name="component" class="form-control" data-field="component">
';
        $buffer .= $indent . '                <option value="">';
        $value = $context->find('str');
        $buffer .= $this->section32e423e2855b2b931357d3f3a8ae86d1($context, $indent, $value);
        $buffer .= '</option>
';
        $value = $context->find('allcomponents');
        $buffer .= $this->sectionE97c05bd32d1e9cde582fcd6db417e84($context, $indent, $value);
        $buffer .= $indent . '            </select>
';
    
        return $buffer;
    }

    public function block4600916e6a0cbf5d4141b9a13384be1b($context)
    {
        $indent = $buffer = '';
        $buffer .= '                    ';
        $value = $context->find('str');
        $buffer .= $this->section9a5212d39aeffe2d5a6f1bdb563520b1($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block4fa333dd8dc02b0d45262620378719e7($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('search'), $context);
        $buffer .= $indent . ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function block94b12efba1301f6311b9772033f56975($context)
    {
        $indent = $buffer = '';
        $buffer .= '            ';
        if ($parent = $this->mustache->loadPartial('core/search_input_auto')) {
            $context->pushBlockContext(array(
                'label' => array($this, 'block4600916e6a0cbf5d4141b9a13384be1b'),
                'value' => array($this, 'block4fa333dd8dc02b0d45262620378719e7'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
    
        return $buffer;
    }
}
