<?php

class __Mustache_245fc7aee9d9f4e8240de79a1863066b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid tertiary-navigation full-width-bottom-border">
';
        $buffer .= $indent . '    <div class="row">
';
        $value = $context->find('generalnavselector');
        $buffer .= $this->section70583f5a8fcc1cd4ae6828417b1997a8($context, $indent, $value);
        $value = $context->find('searchdropdown');
        $buffer .= $this->section46c961bbb1a95e1dd4327573805e5008($context, $indent, $value);
        $value = $context->find('groupselector');
        $buffer .= $this->section91166eb8fb77e0a6a9cd8cb3c1b6c289($context, $indent, $value);
        $value = $context->find('initialselector');
        $buffer .= $this->sectionB0a79c27c3b7c303220bead154106617($context, $indent, $value);
        $value = $context->find('collapsedcolumns');
        $buffer .= $this->section8a00ae8220d459740a22825807062023($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section70583f5a8fcc1cd4ae6828417b1997a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
                {{>core/tertiary_navigation_selector}}
            </div>
            <div class="navitem-divider"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/tertiary_navigation_selector')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46c961bbb1a95e1dd4327573805e5008(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
                {{>core_grades/tertiary_navigation_dropdown}}
            </div>
            <div class="navitem-divider"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core_grades/tertiary_navigation_dropdown')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section91166eb8fb77e0a6a9cd8cb3c1b6c289(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
                {{{groupselector}}}
            </div>
            <div class="navitem-divider"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('groupselector'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB0a79c27c3b7c303220bead154106617(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem d-flex flex-column align-self-center">
                {{>core_grades/tertiary_navigation_dropdown}}
            </div>
            <div class="navitem-divider"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem d-flex flex-column align-self-center">
';
                if ($partial = $this->mustache->loadPartial('core_grades/tertiary_navigation_dropdown')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6922901afa7b60d3ce7403587f8d6c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1e2c9ad4cc2721cea0c0bf2a37ac05ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{>core_grades/tertiary_navigation_dropdown}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_grades/tertiary_navigation_dropdown')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a00ae8220d459740a22825807062023(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem flex-column align-self-center ml-auto {{#classes}}{{.}}{{/classes}}" aria-live="polite">
                {{#content}}
                    {{>core_grades/tertiary_navigation_dropdown}}
                {{/content}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem flex-column align-self-center ml-auto ';
                $value = $context->find('classes');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '" aria-live="polite">
';
                $value = $context->find('content');
                $buffer .= $this->section1e2c9ad4cc2721cea0c0bf2a37ac05ab($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
