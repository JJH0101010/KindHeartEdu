<?php

class __Mustache_371b89c495737ce06c96922a17339aeb extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="cta alert alert-primary alert-block fade in ';
        $value = $this->resolveValue($context->find('extraclasses'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $value = $context->find('region');
        $buffer .= $this->sectionF464c915a0d5e579de1542af7cf1a996($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '    <div class="media">
';
        $buffer .= $indent . '        <div class="cta-icon mr-2 icon-size-5">
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->sectionD805836a3f68cde1c7e1db411624eb88($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="media-body align-self-center">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('message'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '<br>
';
        $value = $context->find('actions');
        $buffer .= $this->section545295c987ea813effa721b973e481e2($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionF464c915a0d5e579de1542af7cf1a996(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-region="{{ region }}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-region="';
                $value = $this->resolveValue($context->find('region'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD805836a3f68cde1c7e1db411624eb88(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{ icon.pix }}, {{ icon.component }} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->findDot('icon.pix'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', ';
                $value = $this->resolveValue($context->findDot('icon.component'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b463486908c3e2a276d50a683ce7f87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                   data-{{ name }}="{{ value }}"
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                   data-';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5d6ff3f0463d3a1689465808bc0d547(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'opensinnewwindow';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'opensinnewwindow';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC39b10c42f65bf4b9f12a00911cf13a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/externallink, core, {{#str}}opensinnewwindow{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/externallink, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionD5d6ff3f0463d3a1689465808bc0d547($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32464f1bf6b45d7fe70f0aca0c55b27f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="ml-1">{{#pix}}i/externallink, core, {{#str}}opensinnewwindow{{/str}}{{/pix}}</span>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<span class="ml-1">';
                $value = $context->find('pix');
                $buffer .= $this->sectionC39b10c42f65bf4b9f12a00911cf13a3($context, $indent, $value);
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section545295c987ea813effa721b973e481e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{ url }}" class="link-underline aalink"
                    {{# data }}
                   data-{{ name }}="{{ value }}"
                    {{/ data }}
                >{{ title }}{{#newwindow}}<span class="ml-1">{{#pix}}i/externallink, core, {{#str}}opensinnewwindow{{/str}}{{/pix}}</span>{{/newwindow}}</a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="link-underline aalink"
';
                $value = $context->find('data');
                $buffer .= $this->section2b463486908c3e2a276d50a683ce7f87($context, $indent, $value);
                $buffer .= $indent . '                >';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $value = $context->find('newwindow');
                $buffer .= $this->section32464f1bf6b45d7fe70f0aca0c55b27f($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
