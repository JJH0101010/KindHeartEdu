<?php

class __Mustache_bfe642d66d0afe5792d44782222c0a52 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('heading');
        $buffer .= $this->section317d5294b0743e273e8398186fd5d009($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '<div class="cb-toolbar-container container-fluid my-2">
';
        $buffer .= $indent . '    <div class="row">
';
        $value = $context->find('usercanedit');
        $buffer .= $this->sectionD84be5b2e669b27ee07a5d04df92d58f($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('actionmenu');
        $buffer .= $this->sectionE134f6a5aa57eddf0d05c72c18aab709($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('closeurl');
        $buffer .= $this->section9984901733dd1ce5e96139d4194ab1c9($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section317d5294b0743e273e8398186fd5d009(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h2>{{heading}}</h2>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<h2>';
                $value = $this->resolveValue($context->find('heading'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd3b4bf865abc6ce6b96cc2301a00c9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edit';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'edit';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD84be5b2e669b27ee07a5d04df92d58f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="d-flex mr-3">
            <a href="{{editcontenturl}}" class="btn btn-primary" data-action="edit-content">
                {{#str}}edit{{/str}}
            </a>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="d-flex mr-3">
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('editcontenturl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-primary" data-action="edit-content">
';
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE134f6a5aa57eddf0d05c72c18aab709(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div>
            {{> core_contentbank/contentbankmenu }}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div>
';
                if ($partial = $this->mustache->loadPartial('core_contentbank/contentbankmenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6c25f6b096d01e4fd16dde79d3dd890(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'exit, core_contentbank';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'exit, core_contentbank';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9984901733dd1ce5e96139d4194ab1c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="ml-auto">
            <a href="{{closeurl}}" class="btn btn-secondary" data-action="close-content">
                {{#str}}exit, core_contentbank{{/str}}
            </a>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="ml-auto">
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('closeurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-secondary" data-action="close-content">
';
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->sectionD6c25f6b096d01e4fd16dde79d3dd890($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
