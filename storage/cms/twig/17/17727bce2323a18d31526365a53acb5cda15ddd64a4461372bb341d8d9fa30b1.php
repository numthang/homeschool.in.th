<?php

/* /home/tee/domains/homeschoolnetwork.org/public_html/themes/responsiv-flat/pages/home.htm */
class __TwigTemplate_4c3b570906938e5d6792408100da15803c4188a3c396b802504be8516bcb8828 extends Twig_Template
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
        echo "<section class=\"home-title\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-12 col-md-5 home-login\">
        <div class=\"signup - form\">
          ";
        // line 6
        if ( !($context["user"] ?? null)) {
            // line 7
            echo "          <form data-request=\"onSignin\">
            <div class=\"form-group\">
              <label for=\"userSigninLogin\">";
            // line 9
            echo twig_escape_filter($this->env, ($context["loginAttributeLabel"] ?? null), "html", null, true);
            echo "</label>
              <input
                name=\"login\"
                type=\"text\"
                class=\"form-control\"
                id=\"userSigninLogin\"
                placeholder=\"Enter your ";
            // line 15
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["loginAttributeLabel"] ?? null)), "html", null, true);
            echo "\" />

              <label for=\"userSigninPassword\">Password</label>
              <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"userSigninPassword\"
                placeholder=\"Enter your password\" />
            </div>
            <button type=\"submit\" style=\"width:225px; height:35px; padding-top: 5px; margin-top:5px;\" class=\"btn  btn-default\">Sign in</button>
            <a href=\"/flynsarmy/sociallogin/Facebook\"><img src=\"";
            // line 26
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/fb-login.png");
            echo "\" class=\"social-login\"></a>
            <a href=\"/flynsarmy/sociallogin/Google\"><img src=\"";
            // line 27
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/g-login.png");
            echo "\" class=\"social-login\"></a>
            <a href=\"/flynsarmy/sociallogin/Twitter\"><img src=\"";
            // line 28
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/t-login.png");
            echo "\" class=\"social-login\"></a>
          </form>
          <br>";
            // line 30
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("No account ?"));
            echo " <a href=\"/login\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Register"));
            echo "</a>
          ";
        } else {
            // line 32
            echo "            <div class=\"row\">
              <div class=\"col-sm-12\">
                <h3><a href=\"/user/profile/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", array()), "html", null, true);
            echo "</a></h3>
              </div>
            </div>
\t\t        <div class=\"row\">
              <!--<div class=\"col-sm-2 col-xs-2\" align=\"center\">
                <a href=\"/user/profile/";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()), "html", null, true);
            echo "\"><img src=\"";
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook_id", array())) {
                echo " https://graph.facebook.com/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook_id", array()), "html", null, true);
                echo "/picture?type=normal ";
            } else {
                echo " ";
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/anonymous.jpg");
                echo " ";
            }
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
            echo "\"  title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
            echo "\" class=\"img-rounded img-responsive user-icon avatar-responsive\"></a>
              </div>-->
\t\t          <div class=\"col-sm-3 col-xs-3\" align=\"center\">
\t\t            <a href=\"/login/profile\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/fa-address-book-o.png\" class=\"img-rounded user-icon img-responsive\" title=\"";
            // line 42
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("My profile"));
            echo "\"></a>
\t\t          </div>
\t\t          <div class=\"col-sm-3 col-xs-3\" align=\"center\">
\t\t            <a href=\"/login/new/course\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/fa-file-text-o.png\" class=\"img-rounded user-icon img-responsive\" title=\"";
            // line 45
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New course"));
            echo "\"></a>
\t\t          </div>
\t\t          <div class=\"col-sm-3 col-xs-3\" align=\"center\">
\t\t            <a href=\"/login/new/evaluation\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/fa-file-picture-o.png\" class=\"img-rounded user-icon img-responsive\" title=\"";
            // line 48
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New evaluation"));
            echo "\"></a>
\t\t          </div>
\t\t          <div class=\"col-sm-3 col-xs-3\" align=\"center\">
\t\t            <a href=\"/login/new/post\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/fa-pencil-o.png\" class=\"img-rounded user-icon img-responsive\" title=\"";
            // line 51
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New post"));
            echo "\"></a>
\t\t          </div>
              <!--<div class=\"col-sm-2 col-xs-2\" align=\"center\">
\t\t            <a href=\"/login/new/post\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/signout.png\" class=\"img-rounded user-icon img-responsive\" title=\"";
            // line 54
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Sign out"));
            echo "\"></a>
\t\t          </div>-->
            </div>
            <div class=\"row\" style=\"margin-top:10px;\">
              <div class=\"col-sm-12\">
                <b>";
            // line 59
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Course"));
            echo "</b>
                <p>
                  ";
            // line 61
            $context["courses"] = twig_get_attribute($this->env, $this->source, ($context["courses"] ?? null), "courses", array());
            // line 62
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 63
                echo "                    <a href=\"/login/edit/course/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", array()), "html", null, true);
                echo "\"> <span class=\"fui-new\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", array()), "html", null, true);
                echo "</a><br>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                </p>
                <b>";
            // line 66
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Evaluation"));
            echo "</b>
                <p>
                  ";
            // line 68
            $context["evaluations"] = twig_get_attribute($this->env, $this->source, ($context["evaluations"] ?? null), "evaluations", array());
            // line 69
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["evaluations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 70
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["c"], "evaluations", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                    // line 71
                    echo "                      <a href=\"/login/edit/evaluation/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "id", array()), "html", null, true);
                    echo "\"> <span class=\"fui-new\"></span> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "name", array()), "html", null, true);
                    echo "</a><br>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                </p>
              </div>
\t\t          <!--<div class=\"col-sm-2\" align=\"center\">
\t\t            <a href=\"javascript:void(0);\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/signout.png\" class=\"img-rounded user-icon\"><font class=\"user-menu\">";
            // line 77
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Sign out"));
            echo "</font></a>
\t\t          </div>-->
\t\t        </div>
          ";
        }
        // line 81
        echo "        </div>
        <!--<div class=\"additional-links\">
          By signing up you agree to <a href=\"#\">Terms of Use</a> and <a href=\"#\">Privacy Policy</a>
          </div>-->
      </div>
      <div class=\"col-sm-12 col-md-7\">
        ";
        // line 87
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slide"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 88
        echo "      </div>
    </div>
  </div>
</section>
<div class=\"container\">
  <!-- Services -->
  <div class=\"row our-services\" style=\"margin-top:10px;\">
    <div class=\"col-sm-12\">
      <h4 class=\"headline\"><span>";
        // line 96
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("What we do"));
        echo "</span></h4>
      <p>\"เครือข่ายบ้านเรียน\" เว็บกลางสำหรับสมาชิกบ้านเรียนหรือโฮมสคูลในเมืองไทย สามารถติดต่อ แลกเปลี่ยน หาความรู้ในการทำโฮมสคูล โดยสมาชิกจะสามารถ ค้นฐานข้อมูลสมาชิกบ้านเรียน, เขียนแผนการศึกษาออนไลน์, เขียนแบบประเมินและร่องรอยการเรียนรู้และสามารถร่วมเขียนเนื้อหาหรือบันทึกใดๆ ที่ต้องการแชร์ให้กับสมาชิกบ้านเรียนท่านอื่นๆ หรือบุคคลที่สนใจได้เข้ามาศึกษา เพื่อทำความรู้จักและสร้างกลุ่มบ้านเรียนให้ใหญ่ขึ้นได้ต่อไป</p>
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-4\">
          <div class=\"services\">
            <div class=\"service-item\">
              <i class=\"fa fa-vcard\"></i>
              <div class=\"service-desc\">
                <h5><a href=\"/login/profile\">";
        // line 104
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("User profile"));
        echo "</a></h5>
                <p>อย่าลืมกดเข้าไปอัพเดทข้อมูลเกี่ยวกับบ้านเรียนของคุณ เพื่อสร้างเครือข่ายให้ใหญ่ขึ้น และเป็นที่รู้จัก ไม่ต้องทนเหงาอีกต่อไป</p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-md-4\">
          <div class=\"services\">
            <div class=\"service-item\">
              <i class=\"fa fa-book\"></i>
              <div class=\"service-desc\">
                <h5><a href=\"/login/new/course\">";
        // line 115
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New course"));
        echo "</a></h5>
                <p>หากคุณประสบปัญหาในการเขียนรายงาน, ออกแบบการเรียนการสอนและการจัดเรียงเอกสาร
                  ด้านในจะมีตัวอย่างการเขียนแผนแบบสำเร็จรูปให้เลือกใช้งาน
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-md-4\">
          <div class=\"services\">
            <div class=\"service-item\">
              <i class=\"fa fa-clipboard\"></i>
              <div class=\"service-desc\">
                <h5><a href=\"/login/new/evaluation\">";
        // line 128
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New evaluation"));
        echo "</a></h5>
                <p>ทุกปี จะมีเทศกาลปั่นรายงาน ส่วนนี้จะเป็นส่วนของการทำรายงานประเมินผล ท่านสามารถอัพเดทร่องรอยการเรียนรู้ของนักเรียนได้เรื่อยๆ ตลอดปี </p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-md-4\">
          <div class=\"services\">
            <div class=\"service-item\">
              <i class=\"fa fui-new\"></i>
              <div class=\"service-desc\">
                <h5><a href=\"/login/new/post\">";
        // line 139
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New post"));
        echo "</a></h5>
                <p>นอกเหนือจากงานเขียนที่ต้องส่งเขตแล้ว ท่านยังสามารถช่วยเหลือชุมชน ด้วยการเขียนบทความหรืออื่นๆ แสดงบนหน้าเว็บแก่คนรุ่นหลังต่อไป</p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-md-4\">
          <div class=\"services\">
            <div class=\"service-item\">
              <i class=\"fa fa-cloud\"></i>
              <div class=\"service-desc\">
                <h5><a href=\"/cloud\">";
        // line 150
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Homeschooler cloud"));
        echo "</a></h5>
                <p>มีใครทำบ้านเรียนในพื้นที่บ้าง เชื่อว่าเป็นคำถามแรกๆ ในใจหลังจากที่คิดจะทำโฮมสคูล ไปค้นหาเพื่อนบ้านโฮมสคูลในพื้นที่ของคุณกันเลย</p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-md-4\">
          <div class=\"services\">
            <div class=\"service-item\">
              <i class=\"fa fa-question-circle-o\"></i>
              <div class=\"service-desc\">
                <h5><a href=\"/blog/59\">";
        // line 161
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("FAQ"));
        echo "</a></h5>
                <p>คำถามที่พบบ่อย ที่ได้รับการรวบรวมจากสมาชิกหลายท่านจากหลายแหล่ง เช่น เริ่มต้นโฮมสคูลทำอย่างไร บ้านต้องรวยหรือเปล่า เป็นต้น</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        // line 170
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("ads/bottom"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 171
        echo "  <div class=\"row our-team\">
    <div class=\"col-sm-8\">
      <h4 class=\"headline\"><span>";
        // line 173
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Our team"));
        echo "</span></h4>
      <div class=\"row\">
        <div class=\"col-sm-4 col-xs-12\">
          <div class=\"team-member text-center\">
            <img class=\"img-responsive center-block\" src=\"https://graph.facebook.com/528931910/picture?type=normal\" alt=\"\" style=\"cursor:pointer; border-radius: 200px;\" onClick=\"window.location.href = '/user/profile/2';\">
            <div class=\"info\">
              Unnop Sricharoenchai
              <p class=\"text-muted\">Administrator & Programmer</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-4 col-xs-12\">
          <div class=\"team-member text-center\">
            <img class=\"img-responsive center-block\" src=\"https://graph.facebook.com/100000122460462/picture?type=normal\" alt=\"\" style=\"cursor:pointer; border-radius: 200px;\" onClick=\"window.location.href = '/user/profile/12';\">
            <div class=\"info\">
              Patai Wonganutrohd
              <p class=\"text-muted\">Administrator & Writer</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-4 col-xs-12\">
          <div class=\"team-member text-center\">
            <img class=\"img-responsive center-block\" src=\"https://graph.facebook.com/100001891270373/picture?type=normal\" alt=\"\" style=\"cursor:pointer; border-radius: 200px;\" onClick=\"window.location.href = '/user/profile/10';\">
            <div class=\"info\">
              Joompot Sriyapan
              <p class=\"text-muted\">Writer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-sm-4\">

      <h4 class=\"headline\"><span>Find Us on Facebook</span></h4>
      <div class=\"fb-page\"
        data-href=\"https://www.facebook.com/HomeschoolNetwork\"
        data-hide-cover=\"false\"
        data-show-facepile=\"true\"
        data-adapt-container-width=\"true\"></div>
    </div>
  </div>
  <!--<div class=\"recent-tweets\">
    <h4 class=\"headline\"><span>Recent tweets</span></h4>
    <div class=\"tweet\">
        <i class=\"fa fa-twitter\"></i>
        <p>
            Salami turkey jowl rump jerky ball tip drumstick ground round tenderloin kielbasa hamburger prosciutto.
            <a href=\"#\">1 day ago</a>
        </p>
    </div>
    <div class=\"tweet\">
        <i cl#recent tweet
    ass=\"fa fa-twitter\"></i>
        <p>
            Short loin pork belly beef, tenderloin swine ribeye tri-tip doner salami rump hamburger.
            <a href=\"#\">2 days ago</a>
        </p>
    </div>
    </div>-->
</div>
<br />";
    }

    public function getTemplateName()
    {
        return "/home/tee/domains/homeschoolnetwork.org/public_html/themes/responsiv-flat/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 173,  340 => 171,  336 => 170,  324 => 161,  310 => 150,  296 => 139,  282 => 128,  266 => 115,  252 => 104,  241 => 96,  231 => 88,  227 => 87,  219 => 81,  212 => 77,  207 => 74,  201 => 73,  190 => 71,  185 => 70,  180 => 69,  178 => 68,  173 => 66,  170 => 65,  159 => 63,  154 => 62,  152 => 61,  147 => 59,  139 => 54,  133 => 51,  127 => 48,  121 => 45,  115 => 42,  95 => 39,  83 => 34,  79 => 32,  72 => 30,  67 => 28,  63 => 27,  59 => 26,  45 => 15,  36 => 9,  32 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"home-title\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-12 col-md-5 home-login\">
        <div class=\"signup - form\">
          {% if not user %}
          <form data-request=\"onSignin\">
            <div class=\"form-group\">
              <label for=\"userSigninLogin\">{{ loginAttributeLabel }}</label>
              <input
                name=\"login\"
                type=\"text\"
                class=\"form-control\"
                id=\"userSigninLogin\"
                placeholder=\"Enter your {{ loginAttributeLabel|lower }}\" />

              <label for=\"userSigninPassword\">Password</label>
              <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"userSigninPassword\"
                placeholder=\"Enter your password\" />
            </div>
            <button type=\"submit\" style=\"width:225px; height:35px; padding-top: 5px; margin-top:5px;\" class=\"btn  btn-default\">Sign in</button>
            <a href=\"/flynsarmy/sociallogin/Facebook\"><img src=\"{{ 'assets/images/fb-login.png'|theme }}\" class=\"social-login\"></a>
            <a href=\"/flynsarmy/sociallogin/Google\"><img src=\"{{ 'assets/images/g-login.png'|theme }}\" class=\"social-login\"></a>
            <a href=\"/flynsarmy/sociallogin/Twitter\"><img src=\"{{ 'assets/images/t-login.png'|theme }}\" class=\"social-login\"></a>
          </form>
          <br>{{ 'No account ?'|_ }} <a href=\"/login\">{{ 'Register'|_ }}</a>
          {% else %}
            <div class=\"row\">
              <div class=\"col-sm-12\">
                <h3><a href=\"/user/profile/{{ user.id }}\">{{ user.name }} {{ user.surname }}</a></h3>
              </div>
            </div>
\t\t        <div class=\"row\">
              <!--<div class=\"col-sm-2 col-xs-2\" align=\"center\">
                <a href=\"/user/profile/{{ user.id }}\"><img src=\"{% if user.facebook_id %} https://graph.facebook.com/{{ user.facebook_id }}/picture?type=normal {% else %} {{ 'assets/images/team/anonymous.jpg'|theme }} {% endif %}\" alt=\"{{ user.name }}\"  title=\"{{ user.name }}\" class=\"img-rounded img-responsive user-icon avatar-responsive\"></a>
              </div>-->
\t\t          <div class=\"col-sm-3 col-xs-3\" align=\"center\">
\t\t            <a href=\"/login/profile\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/fa-address-book-o.png\" class=\"img-rounded user-icon img-responsive\" title=\"{{ 'My profile'|_ }}\"></a>
\t\t          </div>
\t\t          <div class=\"col-sm-3 col-xs-3\" align=\"center\">
\t\t            <a href=\"/login/new/course\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/fa-file-text-o.png\" class=\"img-rounded user-icon img-responsive\" title=\"{{ 'New course'|_ }}\"></a>
\t\t          </div>
\t\t          <div class=\"col-sm-3 col-xs-3\" align=\"center\">
\t\t            <a href=\"/login/new/evaluation\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/fa-file-picture-o.png\" class=\"img-rounded user-icon img-responsive\" title=\"{{ 'New evaluation'|_ }}\"></a>
\t\t          </div>
\t\t          <div class=\"col-sm-3 col-xs-3\" align=\"center\">
\t\t            <a href=\"/login/new/post\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/fa-pencil-o.png\" class=\"img-rounded user-icon img-responsive\" title=\"{{ 'New post'|_ }}\"></a>
\t\t          </div>
              <!--<div class=\"col-sm-2 col-xs-2\" align=\"center\">
\t\t            <a href=\"/login/new/post\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/signout.png\" class=\"img-rounded user-icon img-responsive\" title=\"{{ 'Sign out'|_ }}\"></a>
\t\t          </div>-->
            </div>
            <div class=\"row\" style=\"margin-top:10px;\">
              <div class=\"col-sm-12\">
                <b>{{ 'Course'|_ }}</b>
                <p>
                  {%  set courses = courses.courses %}
                  {% for c in courses %}
                    <a href=\"/login/edit/course/{{ c.id }}\"> <span class=\"fui-new\"></span> {{ c.name }}</a><br>
                  {% endfor %}
                </p>
                <b>{{ 'Evaluation'|_ }}</b>
                <p>
                  {%  set evaluations = evaluations.evaluations %}
                  {% for c in evaluations %}
                    {% for e in c.evaluations %}
                      <a href=\"/login/edit/evaluation/{{ e.id }}\"> <span class=\"fui-new\"></span> {{ e.name }}</a><br>
                    {% endfor %}
                  {% endfor %}
                </p>
              </div>
\t\t          <!--<div class=\"col-sm-2\" align=\"center\">
\t\t            <a href=\"javascript:void(0);\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/signout.png\" class=\"img-rounded user-icon\"><font class=\"user-menu\">{{ 'Sign out'|_ }}</font></a>
\t\t          </div>-->
\t\t        </div>
          {% endif %}
        </div>
        <!--<div class=\"additional-links\">
          By signing up you agree to <a href=\"#\">Terms of Use</a> and <a href=\"#\">Privacy Policy</a>
          </div>-->
      </div>
      <div class=\"col-sm-12 col-md-7\">
        {% partial 'slide' %}
      </div>
    </div>
  </div>
</section>
<div class=\"container\">
  <!-- Services -->
  <div class=\"row our-services\" style=\"margin-top:10px;\">
    <div class=\"col-sm-12\">
      <h4 class=\"headline\"><span>{{ 'What we do'|_ }}</span></h4>
      <p>\"เครือข่ายบ้านเรียน\" เว็บกลางสำหรับสมาชิกบ้านเรียนหรือโฮมสคูลในเมืองไทย สามารถติดต่อ แลกเปลี่ยน หาความรู้ในการทำโฮมสคูล โดยสมาชิกจะสามารถ ค้นฐานข้อมูลสมาชิกบ้านเรียน, เขียนแผนการศึกษาออนไลน์, เขียนแบบประเมินและร่องรอยการเรียนรู้และสามารถร่วมเขียนเนื้อหาหรือบันทึกใดๆ ที่ต้องการแชร์ให้กับสมาชิกบ้านเรียนท่านอื่นๆ หรือบุคคลที่สนใจได้เข้ามาศึกษา เพื่อทำความรู้จักและสร้างกลุ่มบ้านเรียนให้ใหญ่ขึ้นได้ต่อไป</p>
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-4\">
          <div class=\"services\">
            <div class=\"service-item\">
              <i class=\"fa fa-vcard\"></i>
              <div class=\"service-desc\">
                <h5><a href=\"/login/profile\">{{ 'User profile'|_ }}</a></h5>
                <p>อย่าลืมกดเข้าไปอัพเดทข้อมูลเกี่ยวกับบ้านเรียนของคุณ เพื่อสร้างเครือข่ายให้ใหญ่ขึ้น และเป็นที่รู้จัก ไม่ต้องทนเหงาอีกต่อไป</p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-md-4\">
          <div class=\"services\">
            <div class=\"service-item\">
              <i class=\"fa fa-book\"></i>
              <div class=\"service-desc\">
                <h5><a href=\"/login/new/course\">{{ 'New course'|_ }}</a></h5>
                <p>หากคุณประสบปัญหาในการเขียนรายงาน, ออกแบบการเรียนการสอนและการจัดเรียงเอกสาร
                  ด้านในจะมีตัวอย่างการเขียนแผนแบบสำเร็จรูปให้เลือกใช้งาน
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-md-4\">
          <div class=\"services\">
            <div class=\"service-item\">
              <i class=\"fa fa-clipboard\"></i>
              <div class=\"service-desc\">
                <h5><a href=\"/login/new/evaluation\">{{ 'New evaluation'|_ }}</a></h5>
                <p>ทุกปี จะมีเทศกาลปั่นรายงาน ส่วนนี้จะเป็นส่วนของการทำรายงานประเมินผล ท่านสามารถอัพเดทร่องรอยการเรียนรู้ของนักเรียนได้เรื่อยๆ ตลอดปี </p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-md-4\">
          <div class=\"services\">
            <div class=\"service-item\">
              <i class=\"fa fui-new\"></i>
              <div class=\"service-desc\">
                <h5><a href=\"/login/new/post\">{{ 'New post'|_ }}</a></h5>
                <p>นอกเหนือจากงานเขียนที่ต้องส่งเขตแล้ว ท่านยังสามารถช่วยเหลือชุมชน ด้วยการเขียนบทความหรืออื่นๆ แสดงบนหน้าเว็บแก่คนรุ่นหลังต่อไป</p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-md-4\">
          <div class=\"services\">
            <div class=\"service-item\">
              <i class=\"fa fa-cloud\"></i>
              <div class=\"service-desc\">
                <h5><a href=\"/cloud\">{{ 'Homeschooler cloud'|_ }}</a></h5>
                <p>มีใครทำบ้านเรียนในพื้นที่บ้าง เชื่อว่าเป็นคำถามแรกๆ ในใจหลังจากที่คิดจะทำโฮมสคูล ไปค้นหาเพื่อนบ้านโฮมสคูลในพื้นที่ของคุณกันเลย</p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-md-4\">
          <div class=\"services\">
            <div class=\"service-item\">
              <i class=\"fa fa-question-circle-o\"></i>
              <div class=\"service-desc\">
                <h5><a href=\"/blog/59\">{{ 'FAQ'|_ }}</a></h5>
                <p>คำถามที่พบบ่อย ที่ได้รับการรวบรวมจากสมาชิกหลายท่านจากหลายแหล่ง เช่น เริ่มต้นโฮมสคูลทำอย่างไร บ้านต้องรวยหรือเปล่า เป็นต้น</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {% partial \"ads/bottom\" %}
  <div class=\"row our-team\">
    <div class=\"col-sm-8\">
      <h4 class=\"headline\"><span>{{ 'Our team'|_ }}</span></h4>
      <div class=\"row\">
        <div class=\"col-sm-4 col-xs-12\">
          <div class=\"team-member text-center\">
            <img class=\"img-responsive center-block\" src=\"https://graph.facebook.com/528931910/picture?type=normal\" alt=\"\" style=\"cursor:pointer; border-radius: 200px;\" onClick=\"window.location.href = '/user/profile/2';\">
            <div class=\"info\">
              Unnop Sricharoenchai
              <p class=\"text-muted\">Administrator & Programmer</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-4 col-xs-12\">
          <div class=\"team-member text-center\">
            <img class=\"img-responsive center-block\" src=\"https://graph.facebook.com/100000122460462/picture?type=normal\" alt=\"\" style=\"cursor:pointer; border-radius: 200px;\" onClick=\"window.location.href = '/user/profile/12';\">
            <div class=\"info\">
              Patai Wonganutrohd
              <p class=\"text-muted\">Administrator & Writer</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-4 col-xs-12\">
          <div class=\"team-member text-center\">
            <img class=\"img-responsive center-block\" src=\"https://graph.facebook.com/100001891270373/picture?type=normal\" alt=\"\" style=\"cursor:pointer; border-radius: 200px;\" onClick=\"window.location.href = '/user/profile/10';\">
            <div class=\"info\">
              Joompot Sriyapan
              <p class=\"text-muted\">Writer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-sm-4\">

      <h4 class=\"headline\"><span>Find Us on Facebook</span></h4>
      <div class=\"fb-page\"
        data-href=\"https://www.facebook.com/HomeschoolNetwork\"
        data-hide-cover=\"false\"
        data-show-facepile=\"true\"
        data-adapt-container-width=\"true\"></div>
    </div>
  </div>
  <!--<div class=\"recent-tweets\">
    <h4 class=\"headline\"><span>Recent tweets</span></h4>
    <div class=\"tweet\">
        <i class=\"fa fa-twitter\"></i>
        <p>
            Salami turkey jowl rump jerky ball tip drumstick ground round tenderloin kielbasa hamburger prosciutto.
            <a href=\"#\">1 day ago</a>
        </p>
    </div>
    <div class=\"tweet\">
        <i cl#recent tweet
    ass=\"fa fa-twitter\"></i>
        <p>
            Short loin pork belly beef, tenderloin swine ribeye tri-tip doner salami rump hamburger.
            <a href=\"#\">2 days ago</a>
        </p>
    </div>
    </div>-->
</div>
<br />", "/home/tee/domains/homeschoolnetwork.org/public_html/themes/responsiv-flat/pages/home.htm", "");
    }
}
