<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/partials/login/profile.htm */
class __TwigTemplate_96b65a1f8c68f7704a08d0bb06085e26ab49f3ee4a5c3d6a188bafe2010f9415 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onUpdate"));
        echo "
  <div class=\"accordion\">
    <dl>
      <dt><a class=\"accordionTitle accordionTitleActive\" href=\"#\"><i class=\"fui-user\"></i> Account</a></dt>
      <dd class=\"accordionItem \">
        <div class=\"row\">
          <div class=\"col-sm-6\">
            <div class=\"form-group\">
              <label for=\"status\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Status"));
        echo "</label>
              <select class=\" form-control\" name=\"status\" >
                <option value=\"1\" ";
        // line 11
        echo (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "status", array()) == 1)) ? ("selected") : (""));
        echo ">Homeschool</option>
                <option value=\"0\" ";
        // line 12
        echo (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "status", array()) == 0)) ? ("selected") : (""));
        echo ">Interested</option>          
              </select>
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <label for=\"accountEmail\">Email</label>
                <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "\">
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"form-group\">

              <label>First Name</label>
              <input name=\"name\" type=\"text\" class=\"form-control\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "\">
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"form-group\">
              <label>Last Name</label>
              <input name=\"surname\" type=\"text\" class=\"form-control\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", array()), "html", null, true);
        echo "\">
            </div>
          </div>
          
          <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <label for=\"accountPassword\">New Password</label>

                <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <label for=\"accountPasswordConfirm\">Confirm New Password</label>

                <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
            </div>
          </div>
        </div>
      </dd>
      <dt><a href=\"#\" class=\"accordionTitle\"><i class=\"fui-location\"></i> Profile</a></dt>
      <dd class=\"accordionItem accordionItemCollapsed\">
        <div class=\"row\">
          <div class=\"col-sm-6\">
            <div class=\"form-group\">
              <label>Phone</label>
              <input name=\"phone\" type=\"text\" class=\"form-control\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", array()), "html", null, true);
        echo "\">
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"form-group\">
              <label>Mobile</label>
              <input name=\"mobile\" type=\"text\" class=\"form-control\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mobile", array()), "html", null, true);
        echo "\">

            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"form-group\">
              <label>Company</label>
              <input name=\"company\" type=\"text\" class=\"form-control\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "company", array()), "html", null, true);
        echo "\">
            </div>
          </div>
          <div class=\"col-sm-12\">
            <div class=\"form-group\">
              <label>Street Address</label>
              <input name=\"street_addr\" type=\"text\" class=\"form-control\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "street_addr", array()), "html", null, true);
        echo "\">
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"form-group\">

              <label>City</label>
              <input name=\"city\" type=\"text\" class=\"form-control\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "city", array()), "html", null, true);
        echo "\">
            </div>
          </div>

          <div class=\"col-sm-6\">
            <div class=\"form-group\">
              <label>Zip</label>
              <input name=\"zip\" type=\"text\" class=\"form-control\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "zip", array()), "html", null, true);
        echo "\">
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"";
        // line 95
        echo twig_escape_filter($this->env, ($context["wrapper_class"] ?? null), "html", null, true);
        echo " form-group\">
              <label>Country</label>
              ";
        // line 97
        echo RainLab\Location\Models\Country::formSelect("country_id", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "country_id", array()), array("class" => (        // line 99
($context["class"] ?? null) . " form-control"), "emptyOption" => "-- SELECT COUNTRY --", "data-request" => "onChangeCountry", "data-request-data" => array("placeholder" => "-- SELECT STATE --", "name" => "country_id")));
        // line 103
        echo "
            </div>

          </div>
          <div class=\"col-sm-6\">
            <div class=\"";
        // line 108
        echo twig_escape_filter($this->env, ($context["wrapper_class"] ?? null), "html", null, true);
        echo " form-group\">
              <label>State</label>
              ";
        // line 110
        echo RainLab\Location\Models\State::formSelect("state_id", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "country_id", array()), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "state_id", array()), array("id" => "state-select", "class" => (($context["class"] ?? null) . " form-control"), "emptyOption" => ($context["placeholder"] ?? null)));
        echo "

            </div>
          </div>
        </div>
      </dd>
      <dt><a href=\"#\" class=\"accordionTitle\"><i class=\"fui-chat\"></i> Contact</a></dt>
      <dd class=\"accordionItem accordionItemCollapsed\">
        <div class=\"form-group\">
          <label>Facebook</label>
          <input name=\"facebook\" type=\"text\" class=\"form-control\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
          <label>Line</label>
          <input name=\"line\" type=\"text\" class=\"form-control\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "line", array()), "html", null, true);
        echo "\">

        </div>
        <div class=\"form-group\">
          <label>Website</label>
          <input name=\"website\" type=\"text\" class=\"form-control\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "website", array()), "html", null, true);
        echo "\">
        </div>
      </dd>
    </dl>
  </div>
  <script src=\"";
        // line 134
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/js/accordion.js"));
        echo "\"></script>
    
  <!--<ul class=\"nav nav-tabs\" id=\"myTab\">
    <div class=\"liner\"></div>
    <li class=\"active\">
      <a href=\"#account\" data-toggle=\"tab\" title=\"Account\">
      <span class=\"round-tabs one\">
      <i class=\"fui-user\"></i> Account
      </span> </a>
    </li>
    <li><a href=\"#profile\" data-toggle=\"tab\" title=\"Profile\">
      <span class=\"round-tabs two\">
      <i class=\"fui-location\"></i> Profile
      </span> </a>
    </li>
    <li><a href=\"#settings\" data-toggle=\"tab\" title=\"Contact\">
      <span class=\"round-tabs four\">
      <i class=\"fui-chat\"></i> Contact
      </span> </a>
    </li>
  </ul>
  <div class=\"tab-content\">
    <div class=\"tab-pane fade in active\" id=\"account\">
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label for=\"status\">Status</label>
            <select class=\" form-control\" name=\"status\" >
              <option value=\"1\" ";
        // line 162
        echo (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "status", array()) == 1)) ? ("selected") : (""));
        echo ">Homeschool</option>
              <option value=\"0\" ";
        // line 163
        echo (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "status", array()) == 0)) ? ("selected") : (""));
        echo ">Interested</option>          
            </select>
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
              <label for=\"accountEmail\">Email</label>
              <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">

            <label>First Name</label>
            <input name=\"name\" type=\"text\" class=\"form-control\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Last Name</label>
            <input name=\"surname\" type=\"text\" class=\"form-control\" value=\"";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
              <label for=\"accountPassword\">New Password</label>

              <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
              <label for=\"accountPasswordConfirm\">Confirm New Password</label>

              <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"profile\">
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Phone</label>
            <input name=\"phone\" type=\"text\" class=\"form-control\" value=\"";
        // line 208
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Mobile</label>
            <input name=\"mobile\" type=\"text\" class=\"form-control\" value=\"";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mobile", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Company</label>
            <input name=\"company\" type=\"text\" class=\"form-control\" value=\"";
        // line 220
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "company", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-12\">
          <div class=\"form-group\">
            <label>Street Address</label>
            <input name=\"street_addr\" type=\"text\" class=\"form-control\" value=\"";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "street_addr", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>City</label>
            <input name=\"city\" type=\"text\" class=\"form-control\" value=\"";
        // line 232
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "city", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">

            <label>Zip</label>
            <input name=\"zip\" type=\"text\" class=\"form-control\" value=\"";
        // line 239
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "zip", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"";
        // line 243
        echo twig_escape_filter($this->env, ($context["wrapper_class"] ?? null), "html", null, true);
        echo " form-group\">
            <label>Country</label>
            ";
        // line 245
        echo RainLab\Location\Models\Country::formSelect("country_id", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "country_id", array()), array("class" => (        // line 247
($context["class"] ?? null) . " form-control"), "emptyOption" => "-- SELECT COUNTRY --", "data-request" => "onChangeCountry", "data-request-data" => array("placeholder" => "-- SELECT STATE --", "name" => "country_id")));
        // line 251
        echo "
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"";
        // line 255
        echo twig_escape_filter($this->env, ($context["wrapper_class"] ?? null), "html", null, true);
        echo " form-group\">
            <label>State</label>
            ";
        // line 257
        echo RainLab\Location\Models\State::formSelect("state_id", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "country_id", array()), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "state_id", array()), array("id" => "state-select", "class" => (($context["class"] ?? null) . " form-control"), "emptyOption" => ($context["placeholder"] ?? null)));
        echo "
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"settings\">
      <div class=\"form-group\">
        <label>Facebook</label>
        <input name=\"facebook\" type=\"text\" class=\"form-control\" value=\"";
        // line 265
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook", array()), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <label>Line</label>
        <input name=\"line\" type=\"text\" class=\"form-control\" value=\"";
        // line 269
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "line", array()), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <label>Website</label>
        <input name=\"website\" type=\"text\" class=\"form-control\" value=\"";
        // line 273
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "website", array()), "html", null, true);
        echo "\">
      </div>
    </div>
    <div class=\"clearfix\"></div>
  </div>-->
  <div class=\"clearfix\"></div>
  <div class=\"row\">
    <div class=\"col-sm-6\">
      <button type=\"submit\" class=\"btn btn-lg btn-info\">Save</button>
    </div>
  </div>
  <br>

";
        // line 286
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/partials/login/profile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 286,  401 => 273,  394 => 269,  387 => 265,  376 => 257,  371 => 255,  365 => 251,  363 => 247,  362 => 245,  357 => 243,  350 => 239,  340 => 232,  331 => 226,  322 => 220,  313 => 214,  304 => 208,  276 => 183,  267 => 177,  257 => 170,  247 => 163,  243 => 162,  212 => 134,  204 => 129,  196 => 124,  189 => 120,  176 => 110,  171 => 108,  164 => 103,  162 => 99,  161 => 97,  156 => 95,  149 => 91,  139 => 84,  129 => 77,  120 => 71,  110 => 64,  101 => 58,  72 => 32,  63 => 26,  53 => 19,  43 => 12,  39 => 11,  34 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_ajax('onUpdate') }}
  <div class=\"accordion\">
    <dl>
      <dt><a class=\"accordionTitle accordionTitleActive\" href=\"#\"><i class=\"fui-user\"></i> Account</a></dt>
      <dd class=\"accordionItem \">
        <div class=\"row\">
          <div class=\"col-sm-6\">
            <div class=\"form-group\">
              <label for=\"status\">{{ 'Status'|_ }}</label>
              <select class=\" form-control\" name=\"status\" >
                <option value=\"1\" {{ user.status == 1 ? 'selected' : '' }}>Homeschool</option>
                <option value=\"0\" {{ user.status == 0 ? 'selected' : '' }}>Interested</option>          
              </select>
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <label for=\"accountEmail\">Email</label>
                <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"{{ user.email }}\">
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"form-group\">

              <label>First Name</label>
              <input name=\"name\" type=\"text\" class=\"form-control\" value=\"{{ user.name }}\">
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"form-group\">
              <label>Last Name</label>
              <input name=\"surname\" type=\"text\" class=\"form-control\" value=\"{{ user.surname }}\">
            </div>
          </div>
          
          <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <label for=\"accountPassword\">New Password</label>

                <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <label for=\"accountPasswordConfirm\">Confirm New Password</label>

                <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
            </div>
          </div>
        </div>
      </dd>
      <dt><a href=\"#\" class=\"accordionTitle\"><i class=\"fui-location\"></i> Profile</a></dt>
      <dd class=\"accordionItem accordionItemCollapsed\">
        <div class=\"row\">
          <div class=\"col-sm-6\">
            <div class=\"form-group\">
              <label>Phone</label>
              <input name=\"phone\" type=\"text\" class=\"form-control\" value=\"{{ user.phone }}\">
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"form-group\">
              <label>Mobile</label>
              <input name=\"mobile\" type=\"text\" class=\"form-control\" value=\"{{ user.mobile }}\">

            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"form-group\">
              <label>Company</label>
              <input name=\"company\" type=\"text\" class=\"form-control\" value=\"{{ user.company }}\">
            </div>
          </div>
          <div class=\"col-sm-12\">
            <div class=\"form-group\">
              <label>Street Address</label>
              <input name=\"street_addr\" type=\"text\" class=\"form-control\" value=\"{{ user.street_addr }}\">
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"form-group\">

              <label>City</label>
              <input name=\"city\" type=\"text\" class=\"form-control\" value=\"{{ user.city }}\">
            </div>
          </div>

          <div class=\"col-sm-6\">
            <div class=\"form-group\">
              <label>Zip</label>
              <input name=\"zip\" type=\"text\" class=\"form-control\" value=\"{{ user.zip }}\">
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"{{ wrapper_class }} form-group\">
              <label>Country</label>
              {{ form_select_country('country_id', user.country_id,
              {
                  class: class ~ ' form-control',
                  emptyOption: '-- SELECT COUNTRY --',
                  'data-request': 'onChangeCountry',
                  'data-request-data': {placeholder: '-- SELECT STATE --', name: 'country_id'},
              }) }}
            </div>

          </div>
          <div class=\"col-sm-6\">
            <div class=\"{{ wrapper_class }} form-group\">
              <label>State</label>
              {{ form_select_state('state_id', user.country_id,  user.state_id, { id: 'state-select', class: class ~ ' form-control', emptyOption: placeholder }) }}

            </div>
          </div>
        </div>
      </dd>
      <dt><a href=\"#\" class=\"accordionTitle\"><i class=\"fui-chat\"></i> Contact</a></dt>
      <dd class=\"accordionItem accordionItemCollapsed\">
        <div class=\"form-group\">
          <label>Facebook</label>
          <input name=\"facebook\" type=\"text\" class=\"form-control\" value=\"{{ user.facebook }}\">
        </div>
        <div class=\"form-group\">
          <label>Line</label>
          <input name=\"line\" type=\"text\" class=\"form-control\" value=\"{{ user.line }}\">

        </div>
        <div class=\"form-group\">
          <label>Website</label>
          <input name=\"website\" type=\"text\" class=\"form-control\" value=\"{{ user.website }}\">
        </div>
      </dd>
    </dl>
  </div>
  <script src=\"{{ ['assets/js/accordion.js']|theme }}\"></script>
    
  <!--<ul class=\"nav nav-tabs\" id=\"myTab\">
    <div class=\"liner\"></div>
    <li class=\"active\">
      <a href=\"#account\" data-toggle=\"tab\" title=\"Account\">
      <span class=\"round-tabs one\">
      <i class=\"fui-user\"></i> Account
      </span> </a>
    </li>
    <li><a href=\"#profile\" data-toggle=\"tab\" title=\"Profile\">
      <span class=\"round-tabs two\">
      <i class=\"fui-location\"></i> Profile
      </span> </a>
    </li>
    <li><a href=\"#settings\" data-toggle=\"tab\" title=\"Contact\">
      <span class=\"round-tabs four\">
      <i class=\"fui-chat\"></i> Contact
      </span> </a>
    </li>
  </ul>
  <div class=\"tab-content\">
    <div class=\"tab-pane fade in active\" id=\"account\">
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label for=\"status\">Status</label>
            <select class=\" form-control\" name=\"status\" >
              <option value=\"1\" {{ user.status == 1 ? 'selected' : '' }}>Homeschool</option>
              <option value=\"0\" {{ user.status == 0 ? 'selected' : '' }}>Interested</option>          
            </select>
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
              <label for=\"accountEmail\">Email</label>
              <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"{{ user.email }}\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">

            <label>First Name</label>
            <input name=\"name\" type=\"text\" class=\"form-control\" value=\"{{ user.name }}\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Last Name</label>
            <input name=\"surname\" type=\"text\" class=\"form-control\" value=\"{{ user.surname }}\">
          </div>
        </div>
        
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
              <label for=\"accountPassword\">New Password</label>

              <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
              <label for=\"accountPasswordConfirm\">Confirm New Password</label>

              <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"profile\">
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Phone</label>
            <input name=\"phone\" type=\"text\" class=\"form-control\" value=\"{{ user.phone }}\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Mobile</label>
            <input name=\"mobile\" type=\"text\" class=\"form-control\" value=\"{{ user.mobile }}\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Company</label>
            <input name=\"company\" type=\"text\" class=\"form-control\" value=\"{{ user.company }}\">
          </div>
        </div>
        <div class=\"col-sm-12\">
          <div class=\"form-group\">
            <label>Street Address</label>
            <input name=\"street_addr\" type=\"text\" class=\"form-control\" value=\"{{ user.street_addr }}\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>City</label>
            <input name=\"city\" type=\"text\" class=\"form-control\" value=\"{{ user.city }}\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">

            <label>Zip</label>
            <input name=\"zip\" type=\"text\" class=\"form-control\" value=\"{{ user.zip }}\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"{{ wrapper_class }} form-group\">
            <label>Country</label>
            {{ form_select_country('country_id', user.country_id,
            {
                class: class ~ ' form-control',
                emptyOption: '-- SELECT COUNTRY --',
                'data-request': 'onChangeCountry',
                'data-request-data': {placeholder: '-- SELECT STATE --', name: 'country_id'},
            }) }}
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"{{ wrapper_class }} form-group\">
            <label>State</label>
            {{ form_select_state('state_id', user.country_id,  user.state_id, { id: 'state-select', class: class ~ ' form-control', emptyOption: placeholder }) }}
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"settings\">
      <div class=\"form-group\">
        <label>Facebook</label>
        <input name=\"facebook\" type=\"text\" class=\"form-control\" value=\"{{ user.facebook }}\">
      </div>
      <div class=\"form-group\">
        <label>Line</label>
        <input name=\"line\" type=\"text\" class=\"form-control\" value=\"{{ user.line }}\">
      </div>
      <div class=\"form-group\">
        <label>Website</label>
        <input name=\"website\" type=\"text\" class=\"form-control\" value=\"{{ user.website }}\">
      </div>
    </div>
    <div class=\"clearfix\"></div>
  </div>-->
  <div class=\"clearfix\"></div>
  <div class=\"row\">
    <div class=\"col-sm-6\">
      <button type=\"submit\" class=\"btn btn-lg btn-info\">Save</button>
    </div>
  </div>
  <br>

{{ form_close() }}", "/home/vsites/homeschool.in.th/themes/responsiv-flat/partials/login/profile.htm", "");
    }
}
