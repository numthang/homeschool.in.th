<?php

/* /home/vsites/homeschoolnetwork.org/themes/responsiv-flat/pages/home.htm */
class __TwigTemplate_ab1a5636e452f7f644b33004074bc63c6590ec67a5aacb3dfd5beb468e2202f5 extends Twig_Template
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
          <div class=\"col-sm-5 col-md-5\">
              <h4>เครือข่ายบ้านเรียน</h4><!--ครบเครื่องเรื่องการทำโฮมสคูลในประเทศไทย-->
              <div class=\"signup-form\">
                ";
        // line 7
        if ( !($context["user"] ?? null)) {
            // line 8
            echo "                <form data-request=\"onSignin\">
                  <div class=\"form-group\">
                      <label for=\"userSigninLogin\">";
            // line 10
            echo twig_escape_filter($this->env, ($context["loginAttributeLabel"] ?? null), "html", null, true);
            echo "</label>
                      <input
                          name=\"login\"
                          type=\"text\"
                          class=\"form-control\"
                          id=\"userSigninLogin\"
                          placeholder=\"Enter your ";
            // line 16
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["loginAttributeLabel"] ?? null)), "html", null, true);
            echo "\" />
                  </div>

                  <div class=\"form-group\">
                      <label for=\"userSigninPassword\">Password</label>
                      <input
                          name=\"password\"
                          type=\"password\"
                          class=\"form-control\"
                          id=\"userSigninPassword\"
                          placeholder=\"Enter your password\" />
                  </div>

                  <button type=\"submit\" class=\"btn btn-block btn-default\">Sign in</button>
                  ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["social_login_links"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["link"]) {
                // line 31
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $context["link"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</a>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                  ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("sociallogin"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 34
            echo "                </form>
                ";
        } else {
            // line 36
            echo "                  <p>
                    <div class=\"row\">
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"/login/profile\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/profile.png\" class=\"img-rounded img-responsive\" style=\"max-width: 90px;max-height: 90px;\"><font style=\"font-size:18px;\">";
            // line 39
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("My profile"));
            echo "</font></a>
                      </div>
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"/login/new/course\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/Book.png\" class=\"img-rounded img-responsive\" style=\"max-width: 90px;max-height: 90px;\"><font style=\"font-size:18px;\">";
            // line 42
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("course"));
            echo "</font></a>
                      </div>
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"/login/new/evaluation\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/Clipboard.png\" class=\"img-rounded img-responsive\" style=\"max-width: 90px;max-height: 90px;\"><font style=\"font-size:18px;\">";
            // line 45
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Evaluation"));
            echo "</font></a>
                      </div>
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"/login/new/post\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/Pencils.png\" class=\"img-rounded img-responsive\" style=\"max-width: 90px;max-height: 90px;\"><font style=\"font-size:18px;\">";
            // line 48
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New post"));
            echo "</font></a>
                      </div>
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"javascript:void(0);\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/signout.png\" class=\"img-rounded img-responsive\" style=\"max-width: 90px;max-height: 90px;\"><font style=\"font-size:18px;\">";
            // line 51
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Sign out"));
            echo "</font></a>
                      </div>
                    </div>
                  </p>
                ";
        }
        // line 56
        echo "              </div>
              <!--<div class=\"additional-links\">
                  By signing up you agree to <a href=\"#\">Terms of Use</a> and <a href=\"#\">Privacy Policy</a>
              </div>-->
          </div>
          <div class=\"col-sm-7 col-md-7 player-wrapper\">
              <div class=\"player\">
                  <iframe src=\"https://www.youtube.com/embed/_VluJjS3IfQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
              </div>
          </div>
      </div>
  </div>
\t<br>
</section>

<section class=\"google-ads\">
\t<div class=\"container\">ADS
\t\t<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
\t\t<!-- Homeschool Network Index Top
\t\t<ins class=\"adsbygoogle\"
\t\t style=\"dis#recent tweet
play:block\"
\t\t data-ad-client=\"ca-pub-9939363335105757\"
\t\t data-ad-slot=\"3572354287\"
\t\t data-ad-format=\"auto\"
\t\t data-full-width-responsive=\"true\"></ins>
\t\t<script>
\t\t(adsbygoogle = window.adsbygoogle || []).push({});
\t\t</script>-->
\t</div>
</section>

<br />

<div class=\"container\">
  <!-- Services -->
  <div class=\"row our-services\">
    <div class=\"col-sm-12\">
      <h4 class=\"headline\"><span> HomeschoolNetwork.org ";
        // line 94
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("What we do"));
        echo "</span></h4>
      <p>\"เครือข่ายบ้านเรียน\" เว็บกลางสำหรับสมาชิกบ้านเรียนหรือโฮมสคูลในเมืองไทย สามารถติดต่อ แลกเปลี่ยน หาความรู้ในการทำโฮมสคูล โดยสมาชิกจะสามารถ ค้นฐานข้อมูลสมาชิกบ้านเรียน, เขียนแผนการศึกษาออนไลน์, เขียนแบบประเมินและร่องรอยการเรียนรู้และสามารถร่วมเขียนเนื้อหาหรือบันทึกใดๆ ที่ต้องการแชร์ให้กับสมาชิกบ้านเรียนท่านอื่นๆ หรือบุคคลที่สนใจได้เข้ามาศึกษา เพื่อทำความรู้จักและสร้างกลุ่มบ้านเรียนให้ใหญ่ขึ้นได้ต่อไป</p>
      <div class=\"row\">
          <div class=\"col-sm-4\">
              <div class=\"services\">
                  <div class=\"service-item\">
                      <i class=\"fa fa-vcard\"></i>
                      <div class=\"service-desc\">
                          <h5><a href=\"/login/profile\">";
        // line 102
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("User profile"));
        echo "</a></h5>
                          <p>อย่าลืมกดเข้าไปอัพเดทข้อมูลเกี่ยวกับบ้านเรียนของคุณ เพื่อสร้างเครือข่ายให้ใหญ่ขึ้น ไม่ต้องทนเหงาอีกต่อไป</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class=\"col-sm-4\">
              <div class=\"services\">
                  <div class=\"service-item\">
                      <i class=\"fa fa-book\"></i>
                      <div class=\"service-desc\">
                          <h5><a href=\"/login/new/course\">";
        // line 113
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New course"));
        echo "</a></h5>
                          <p>หากคุณประสบปัญหาในการเขียนรายงาน, การออกแบบการเรียนการสอนและการจัดเรียงเอกสาร
                            สิ่งนี้จะช่วยได้ โดยข้างในจะมีตัวอย่างการเขียนแผนแบบสำเร็จรูปพร้อมใช้งาน </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class=\"col-sm-4\">
              <div class=\"services\">
                  <div class=\"service-item\">
                      <i class=\"fa fa-clipboard\"></i>
                      <div class=\"service-desc\">
                          <h5><a href=\"/login/new/evaluation\">";
        // line 125
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New evaluation"));
        echo "</a></h5>
                          <p>ทุกปี จะมีเทศกาลปั่นรายงาน ส่วนนี้จะเป็นส่วนของการทำรายงานประเมินผล ท่านสามารถอัพเดทร่องรอยการเรียนรู้ของนักเรียนได้เรื่อยๆ ตลอดปี โดยไม่ต้องดองงานมาทำก่อนจบเทอม </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"services\">
                <div class=\"service-item\">
                    <i class=\"fa fui-new\"></i>
                    <div class=\"service-desc\">
                        <h5><a href=\"/login/new/post\">";
        // line 138
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New post"));
        echo "</a></h5>
                        <p>นอกเหนือจากงานเขียนที่ต้องส่งเขตแล้ว ท่านยังสามารถช่วยเหลือชุมชนด้วยการเขียนบทความหรืออะไรก็ได้สั้นๆ แสดงบนหน้าเว็บ เพื่อเป็นวิทยาทานแก่คนอื่นต่อไป</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"services\">
                <div class=\"service-item\">
                    <i class=\"fa fa-cloud\"></i>
                    <div class=\"service-desc\">
                        <h5><a href=\"/cloud\">";
        // line 149
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Homeschooler cloud"));
        echo "</a></h5>
                        <p>มีใครทำบ้านเรียนในพื้นที่บ้าง เชื่อว่าเป็นคำถามแรกๆ ในใจหลังจากที่คิดจะทำโฮมสคูล ไปค้นหาเพื่อนบ้านโฮมสคูลในพื้นที่ของคุณกันเลย</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"services\">
                <div class=\"service-item\">
                    <i class=\"fa fa-question-circle-o\"></i>
                    <div class=\"service-desc\">
                        <h5><a href=\"/FAQ\">";
        // line 160
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
  <div class=\"row our-team\">
    <div class=\"col-sm-8\">
      <h4 class=\"headline\"><span>";
        // line 171
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Our team"));
        echo "</span></h4>
      <div class=\"row\">
        <div class=\"col-sm-4 col-xs-6\">
          <div class=\"team-member text-center\">
            <img class=\"img-responsive center-block\" src=\"https://graph.facebook.com/528931910/picture?type=normal\" alt=\"\" style=\"cursor:pointer; border-radius: 200px;\" onClick=\"window.location.href = '/user/profile/2';\">
            <div class=\"info\">
              Unnop Sricharoenchai
              <p class=\"text-muted\">Administrator & Programmer</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-4 col-xs-6\">
          <div class=\"team-member text-center\">
            <img class=\"img-responsive center-block\" src=\"https://graph.facebook.com/100000122460462/picture?type=normal\" alt=\"\" style=\"cursor:pointer; border-radius: 200px;\" onClick=\"window.location.href = '/user/profile/12';\">
            <div class=\"info\">
              Patai Wonganutrohd
              <p class=\"text-muted\">Administrator & Writer</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-4 col-xs-6\">
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
      data-width=\"500\"
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
        return "/home/vsites/homeschoolnetwork.org/themes/responsiv-flat/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 171,  248 => 160,  234 => 149,  220 => 138,  204 => 125,  189 => 113,  175 => 102,  164 => 94,  124 => 56,  116 => 51,  110 => 48,  104 => 45,  98 => 42,  92 => 39,  87 => 36,  83 => 34,  78 => 33,  67 => 31,  63 => 30,  46 => 16,  37 => 10,  33 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"home-title\">
  <div class=\"container\">
      <div class=\"row\">
          <div class=\"col-sm-5 col-md-5\">
              <h4>เครือข่ายบ้านเรียน</h4><!--ครบเครื่องเรื่องการทำโฮมสคูลในประเทศไทย-->
              <div class=\"signup-form\">
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
                  </div>

                  <div class=\"form-group\">
                      <label for=\"userSigninPassword\">Password</label>
                      <input
                          name=\"password\"
                          type=\"password\"
                          class=\"form-control\"
                          id=\"userSigninPassword\"
                          placeholder=\"Enter your password\" />
                  </div>

                  <button type=\"submit\" class=\"btn btn-block btn-default\">Sign in</button>
                  {% for name, link in social_login_links %}
                    <a href=\"{{ link }}\">{{ name }}</a>
                  {% endfor %}
                  {% component 'sociallogin' %}
                </form>
                {% else %}
                  <p>
                    <div class=\"row\">
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"/login/profile\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/profile.png\" class=\"img-rounded img-responsive\" style=\"max-width: 90px;max-height: 90px;\"><font style=\"font-size:18px;\">{{ 'My profile'|_ }}</font></a>
                      </div>
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"/login/new/course\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/Book.png\" class=\"img-rounded img-responsive\" style=\"max-width: 90px;max-height: 90px;\"><font style=\"font-size:18px;\">{{ 'course'|_ }}</font></a>
                      </div>
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"/login/new/evaluation\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/Clipboard.png\" class=\"img-rounded img-responsive\" style=\"max-width: 90px;max-height: 90px;\"><font style=\"font-size:18px;\">{{ 'Evaluation'|_ }}</font></a>
                      </div>
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"/login/new/post\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/Pencils.png\" class=\"img-rounded img-responsive\" style=\"max-width: 90px;max-height: 90px;\"><font style=\"font-size:18px;\">{{ 'New post'|_ }}</font></a>
                      </div>
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"javascript:void(0);\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/signout.png\" class=\"img-rounded img-responsive\" style=\"max-width: 90px;max-height: 90px;\"><font style=\"font-size:18px;\">{{ 'Sign out'|_ }}</font></a>
                      </div>
                    </div>
                  </p>
                {% endif %}
              </div>
              <!--<div class=\"additional-links\">
                  By signing up you agree to <a href=\"#\">Terms of Use</a> and <a href=\"#\">Privacy Policy</a>
              </div>-->
          </div>
          <div class=\"col-sm-7 col-md-7 player-wrapper\">
              <div class=\"player\">
                  <iframe src=\"https://www.youtube.com/embed/_VluJjS3IfQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
              </div>
          </div>
      </div>
  </div>
\t<br>
</section>

<section class=\"google-ads\">
\t<div class=\"container\">ADS
\t\t<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
\t\t<!-- Homeschool Network Index Top
\t\t<ins class=\"adsbygoogle\"
\t\t style=\"dis#recent tweet
play:block\"
\t\t data-ad-client=\"ca-pub-9939363335105757\"
\t\t data-ad-slot=\"3572354287\"
\t\t data-ad-format=\"auto\"
\t\t data-full-width-responsive=\"true\"></ins>
\t\t<script>
\t\t(adsbygoogle = window.adsbygoogle || []).push({});
\t\t</script>-->
\t</div>
</section>

<br />

<div class=\"container\">
  <!-- Services -->
  <div class=\"row our-services\">
    <div class=\"col-sm-12\">
      <h4 class=\"headline\"><span> HomeschoolNetwork.org {{ 'What we do'|_ }}</span></h4>
      <p>\"เครือข่ายบ้านเรียน\" เว็บกลางสำหรับสมาชิกบ้านเรียนหรือโฮมสคูลในเมืองไทย สามารถติดต่อ แลกเปลี่ยน หาความรู้ในการทำโฮมสคูล โดยสมาชิกจะสามารถ ค้นฐานข้อมูลสมาชิกบ้านเรียน, เขียนแผนการศึกษาออนไลน์, เขียนแบบประเมินและร่องรอยการเรียนรู้และสามารถร่วมเขียนเนื้อหาหรือบันทึกใดๆ ที่ต้องการแชร์ให้กับสมาชิกบ้านเรียนท่านอื่นๆ หรือบุคคลที่สนใจได้เข้ามาศึกษา เพื่อทำความรู้จักและสร้างกลุ่มบ้านเรียนให้ใหญ่ขึ้นได้ต่อไป</p>
      <div class=\"row\">
          <div class=\"col-sm-4\">
              <div class=\"services\">
                  <div class=\"service-item\">
                      <i class=\"fa fa-vcard\"></i>
                      <div class=\"service-desc\">
                          <h5><a href=\"/login/profile\">{{ 'User profile'|_ }}</a></h5>
                          <p>อย่าลืมกดเข้าไปอัพเดทข้อมูลเกี่ยวกับบ้านเรียนของคุณ เพื่อสร้างเครือข่ายให้ใหญ่ขึ้น ไม่ต้องทนเหงาอีกต่อไป</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class=\"col-sm-4\">
              <div class=\"services\">
                  <div class=\"service-item\">
                      <i class=\"fa fa-book\"></i>
                      <div class=\"service-desc\">
                          <h5><a href=\"/login/new/course\">{{ 'New course'|_ }}</a></h5>
                          <p>หากคุณประสบปัญหาในการเขียนรายงาน, การออกแบบการเรียนการสอนและการจัดเรียงเอกสาร
                            สิ่งนี้จะช่วยได้ โดยข้างในจะมีตัวอย่างการเขียนแผนแบบสำเร็จรูปพร้อมใช้งาน </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class=\"col-sm-4\">
              <div class=\"services\">
                  <div class=\"service-item\">
                      <i class=\"fa fa-clipboard\"></i>
                      <div class=\"service-desc\">
                          <h5><a href=\"/login/new/evaluation\">{{ 'New evaluation'|_ }}</a></h5>
                          <p>ทุกปี จะมีเทศกาลปั่นรายงาน ส่วนนี้จะเป็นส่วนของการทำรายงานประเมินผล ท่านสามารถอัพเดทร่องรอยการเรียนรู้ของนักเรียนได้เรื่อยๆ ตลอดปี โดยไม่ต้องดองงานมาทำก่อนจบเทอม </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"services\">
                <div class=\"service-item\">
                    <i class=\"fa fui-new\"></i>
                    <div class=\"service-desc\">
                        <h5><a href=\"/login/new/post\">{{ 'New post'|_ }}</a></h5>
                        <p>นอกเหนือจากงานเขียนที่ต้องส่งเขตแล้ว ท่านยังสามารถช่วยเหลือชุมชนด้วยการเขียนบทความหรืออะไรก็ได้สั้นๆ แสดงบนหน้าเว็บ เพื่อเป็นวิทยาทานแก่คนอื่นต่อไป</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
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
        <div class=\"col-sm-4\">
            <div class=\"services\">
                <div class=\"service-item\">
                    <i class=\"fa fa-question-circle-o\"></i>
                    <div class=\"service-desc\">
                        <h5><a href=\"/FAQ\">{{ 'FAQ'|_ }}</a></h5>
                        <p>คำถามที่พบบ่อย ที่ได้รับการรวบรวมจากสมาชิกหลายท่านจากหลายแหล่ง เช่น เริ่มต้นโฮมสคูลทำอย่างไร บ้านต้องรวยหรือเปล่า เป็นต้น</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row our-team\">
    <div class=\"col-sm-8\">
      <h4 class=\"headline\"><span>{{ 'Our team'|_ }}</span></h4>
      <div class=\"row\">
        <div class=\"col-sm-4 col-xs-6\">
          <div class=\"team-member text-center\">
            <img class=\"img-responsive center-block\" src=\"https://graph.facebook.com/528931910/picture?type=normal\" alt=\"\" style=\"cursor:pointer; border-radius: 200px;\" onClick=\"window.location.href = '/user/profile/2';\">
            <div class=\"info\">
              Unnop Sricharoenchai
              <p class=\"text-muted\">Administrator & Programmer</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-4 col-xs-6\">
          <div class=\"team-member text-center\">
            <img class=\"img-responsive center-block\" src=\"https://graph.facebook.com/100000122460462/picture?type=normal\" alt=\"\" style=\"cursor:pointer; border-radius: 200px;\" onClick=\"window.location.href = '/user/profile/12';\">
            <div class=\"info\">
              Patai Wonganutrohd
              <p class=\"text-muted\">Administrator & Writer</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-4 col-xs-6\">
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
      data-width=\"500\"
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

<br />", "/home/vsites/homeschoolnetwork.org/themes/responsiv-flat/pages/home.htm", "");
    }
}
