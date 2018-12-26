<?php

/* /home/vsites/homeschool.in.th/plugins/numthang/homeschool/components/courseform/default.htm */
class __TwigTemplate_b13f20b9ec29aa500249e8340854aeaca8862fdb7708ba63c6afb24dfabed5ad extends Twig_Template
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
        echo "<script src=\"https://code.jquery.com/jquery-1.9.1.min.js\"></script>
<link id=\"bsdp-css\" href=\"https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/css/bootstrap-datepicker3.min.css\" rel=\"stylesheet\">
<script src=\"https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>

<script type=\"text/javascript\">
\$.fn.datepicker.defaults.format = \"dd/mm/yyyy\";
</script>


<form data-request=\"onSave\">
  <input type=\"hidden\" name=\"user_id\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()), "html", null, true);
        echo "\">
  <div class=\"row\">
    <div class=\"col-sm-6\">  
      <div class=\"form-group ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method")) {
            echo " has-error ";
        }
        echo "\">
        <label>ชื่อแผนการศึกษา</label>
        <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Enter course name : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", array()), "html", null, true);
        echo "\">
        ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method")) {
            echo "<div class=\"alert alert-warning\" style=\"margin-top:4px;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method"), "html", null, true);
            echo "</div>";
        }
        // line 18
        echo "      </div>
    </div>
    <div class=\"col-sm-6\">  
      <div class=\"form-group ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "hs_name"), "method")) {
            echo " has-error ";
        }
        echo "\">
        <label>ชื่อบ้านเรียน</label>
        <input type=\"text\" class=\"form-control\" name=\"hs_name\" placeholder=\"Enter homeschool name : \" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "hs_name", array()), "html", null, true);
        echo "\">
        ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "hs_name"), "method")) {
            echo "<div class=\"alert alert-warning\" style=\"margin-top:4px;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "hs_name"), "method"), "html", null, true);
            echo "</div>";
        }
        // line 25
        echo "      </div>
    </div>
  </div>
  <div class=\"board-inner\">
    <div class=\"accordion\">
      <dl>
        <dt><a class=\"accordionTitle\" href=\"#\">1. ขอมูลพื้นฐานของครอบครัว</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>บิดา</label>
                <input type=\"text\" class=\"form-control\" name=\"father_name\" placeholder=\"Enter father's name\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "father_name", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>วุฒิการศึกษา</label>
                <input type=\"text\" class=\"form-control\" name=\"father_degree\" placeholder=\"Enter father's degree\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "father_degree", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <label>ประสบการณ์</label>
                <textarea class=\"form-control\" name=\"father_exp\" placeholder=\"Enter father's experience\" rows=\"5\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "father_exp", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
            <div class=\"col-sm-2\"> 
              <div class=\"form-group\">
                <label>อายุ</label>
                <input type=\"text\" class=\"form-control\" name=\"father_age\" placeholder=\"Age\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "father_age", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-4\"> 
              <div class=\"form-group\">
                <label>อาชีพ</label>
                <input type=\"text\" class=\"form-control\" name=\"father_job\" placeholder=\"Enter father's job\"  value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "father_job", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <label>ท่ี่อยู่</label>
                <input type=\"text\" class=\"form-control\" name=\"father_addr\" placeholder=\"Enter father's address\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "father_addr", array()), "html", null, true);
        echo "\">
              </div>
            </div>

            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>มารดา</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_name\" placeholder=\"Enter mother's name\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "mother_name", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>วุฒิการศึกษา</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_degree\" placeholder=\"Enter mother's degree\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "mother_degree", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <label>ประสบการณ์</label>
                <textarea class=\"form-control\" name=\"mother_exp\" placeholder=\"Enter mother's experience\" rows=\"5\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "mother_exp", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
            <div class=\"col-sm-2\"> 
              <div class=\"form-group\">
                <label>อายุ</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_age\" placeholder=\"Age\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "mother_age", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-4\"> 
              <div class=\"form-group\">
                <label>อาชีพ</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_job\" placeholder=\"Enter mother's job\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "mother_job", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <label>ที่อยู</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_addr\" placeholder=\"Enter mother's address\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "mother_addr", array()), "html", null, true);
        echo "\">
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">2. ขอมูลพื้นฐานของผูเรียน</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          2.1 ระบุขอมูลของผูเรียน
          <div class=\"row\">
            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>ชื่อ-สกุล</label>
                <input type=\"text\" class=\"form-control\" name=\"student_name\" placeholder=\"Enter student's name\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "student_name", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>วัน เดือน ปเกิด</label>
                <div class=\"input-group date\" data-provide=\"datepicker\">
                  <input type=\"text\" class=\"form-control\" name=\"birth_date\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "birth_date", array()), "html", null, true);
        echo "\">
                    <div class=\"input-group-addon\">
                      <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
              </div>
            </div>
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <label>ประวัติการศึกษา (กรณีเรียนในระบบโรงเรียนมากอน)</label>
                <textarea class=\"form-control\" name=\"school_exp\" placeholder=\"Enter school's experience\" rows=\"5\">";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "school_exp", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
          </div>
          2.2 พัฒนาการของผูเรียน (ระบุการพัฒนาการของผูเรียน/ความสามารถพิเศษ/ความ
    ตองการพิเศษ)
          <div class=\"row\">
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"hs_development\" placeholder=\"พัฒนาการตามวัย, พัฒนาการตามความสามารถพิเศษ หรือ พัฒนาการตามความตองการพิเศษ\" rows=\"10\">";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "hs_development", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">3. ระดับที่จัดการศึกษา / เหตุผลในการจัดการศึกษาของครอบครัว</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"class_reason\" placeholder=\"ระดับชั้น เช่น ประถมศึกษา (ชั้น ป.1 – ป.3) เหตุผลในการจัดการศึกษาของครอบครัว\" rows=\"20\">";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "class_reason", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">4. จุดมุงหมายของการจัดการศึกษา</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
          <div class=\"col-sm-12\"> 
            <div class=\"form-group\">
              <textarea class=\"form-control\" name=\"edu_purpose\" placeholder=\"ระบุความต้องการ เช่น ต้องการพึ่งตนเอง ลดค่าใช้จ่าย เป็นต้น\" rows=\"20\">";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "edu_purpose", array()), "html", null, true);
        echo "</textarea>
            </div>
          </div>
        </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">5. รูปแบบการจัดการศึกษา</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"edu_type\" placeholder=\"\" rows=\"20\">";
        // line 172
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "edu_type", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "edu_type", array()), "html", null, true);
            echo " ";
        } else {
            echo " 1. จัดการศึกษาแบบครอบครัวเดียว เนื่องจากไมสามารถรวมกิจกรรมกับกลุม บานเรียน หรือครอบครัวอื่น และมีความสนใจเฉพาะดานแตกตางกัน
    2. จัดการศึกษาแบบมีขอตกลงรวมกับโรงเรียนหรือหนวยงานอื่น โดยมีการเขาไปใชทรัพยากรในโรงเรียนหรือเขาไปทํากิจกรรมรวมกัน เนื่องจากตองการใหบุตรไดมีความรูประสบการณที่สามารถเชื่อมโยงเขาสูระบบโรงเรียน
    3. จัดการศึกษาแบบกลุมครอบครัวที่มีแนวคิดคลายๆ กัน เปนการจําลองสังคมเล็กๆ เชื่อวาการ เชื่อมโยงกับกลุมเปนการชวยเสริมพัฒนาการของบุตรได
    4. จัดการศึกษาแบบรวมศูนย จัดการแบบศูนยการเรียน เนื่องจากตองการใหบุตรมีสังคมพอแมทํางานนอกบานทั้งคูจึงมอบหมายใหผูที่เห็นวามีความเหมาะสมมาทําหนาที่จัดกระบวนการเรียนรู
    5. อื่นๆ (ระบุ) ";
        }
        // line 176
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">6. โครงสร้างเวลาเรียน  (Schedule)</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"schedule\" placeholder=\"กลุ่มประสบการณ์ /กลุ่มสาระการเรียนรู้ (ตามตารางในข้อ 7)\" rows=\"20\">";
        // line 186
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "schedule", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "schedule", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
        }
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">7. การจัดกลุ่มสาระการเรียนรู้ /กลุ่มประสบการณ์</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"curriculum\" placeholder=\"\" rows=\"20\">";
        // line 196
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "curriculum", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">8. การจัดกิจกรรมพัฒนาผู้เรียน</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"activity\" placeholder=\"\" rows=\"20\">";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "activity", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">9. การจัดกระบวนการเรียนรู้</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"learning_procedure\" placeholder=\"\" rows=\"20\">";
        // line 216
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "learning_procedure", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">10. การวัดและประเมินผลการเรียนรู้</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"evaluate\" placeholder=\"\" rows=\"20\">";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "evaluate", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">11. อื่นๆ (ครอบครัวสามารถเพิ่มเติมรายละเอียดที่เห็นว่าเป็นประโยชน์ต่อผู้เรียนได้)</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"other\" placeholder=\"\" rows=\"20\">";
        // line 236
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "other", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
      </dl>
    </div>
    <script src=\"";
        // line 243
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/js/accordion.js"));
        echo "\"></script>

    <!--<ul class=\"nav nav-tabs\" id=\"myTab\">
      <div class=\"liner\"></div>
      <li class=\"active\">
        <a href=\"#first\" data-toggle=\"tab\" title=\"ขอมูลพื้นฐานของครอบครัว\">
        <span class=\"round-tabs one\">
          1 
        </span> </a>
      </li>
      <li><a href=\"#second\" data-toggle=\"tab\" title=\"ขอมูลพื้นฐานของผูเรียน\">
        <span class=\"round-tabs two\">
          2
        </span> </a>
      </li>
      <li><a href=\"#third\" data-toggle=\"tab\" title=\"ระดับที่จัดการศึกษา / เหตุผลในการจัดการศึกษาของครอบครัว
\">
        <span class=\"round-tabs three\">
          3
        </span> </a>
      </li>
      <li><a href=\"#forth\" data-toggle=\"tab\" title=\"จุดมุงหมายของการจัดการศึกษา\">
        <span class=\"round-tabs four\">
          4
        </span> </a>
      </li>
      <li><a href=\"#fifth\" data-toggle=\"tab\" title=\"รูปแบบการจัดการศึกษา\">
        <span class=\"round-tabs five\">
          5
        </span> </a>
      </li>
      <li><a href=\"#sixth\" data-toggle=\"tab\" title=\"โครงสร้างเวลาเรียน\">
        <span class=\"round-tabs six\">
          6
        </span> </a>
      </li>
      <li><a href=\"#seventh\" data-toggle=\"tab\" title=\"การจัดกลุ่มสาระการเรียนรู้ /กลุ่มประสบการณ์\">
        <span class=\"round-tabs seven\">
          7
        </span> </a>
      </li>
      <li><a href=\"#eighth\" data-toggle=\"tab\" title=\"การจัดกิจกรรมพัฒนาผู้เรียน\">
        <span class=\"round-tabs eight\">
          8
        </span> </a>
      </li>
      <li><a href=\"#ninth\" data-toggle=\"tab\" title=\"การจัดกระบวนการเรียนรู้\">
        <span class=\"round-tabs nine\">
          9
        </span> </a>
      </li>
      <li><a href=\"#tenth\" data-toggle=\"tab\" title=\"การวัดและประเมินผลการเรียนรู้\">
        <span class=\"round-tabs ten\">
          10
        </span> </a>
      </li>
      <li><a href=\"#eleventh\" data-toggle=\"tab\" title=\"อื่นๆ\">
        <span class=\"round-tabs eleven\">
          11
        </span> </a>
      </li>
    </ul>
  </div>
  <div class=\"tab-content\">
    <div class=\"tab-pane fade in active\" id=\"first\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"second\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"third\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"forth\">
     
    </div>
    <div class=\"tab-pane fade\" id=\"fifth\">
      <h4>5. รูปแบบการจัดการศึกษา </h4>
      
    </div>
    <div class=\"tab-pane fade\" id=\"sixth\">
      <h4>6. โครงสร้างเวลาเรียน  (Schedule)</h4>
      
    </div>
    <div class=\"tab-pane fade\" id=\"seventh\">
      <h4>7. การจัดกลุ่มสาระการเรียนรู้ /กลุ่มประสบการณ์</h4>
      
    </div>
    <div class=\"tab-pane fade\" id=\"eighth\">
      <h4></h4>
      
    </div>
    <div class=\"tab-pane fade\" id=\"ninth\">
      <h4>9. การจัดกระบวนการเรียนรู้</h4>
      
    </div>
    <div class=\"tab-pane fade\" id=\"tenth\">
      <h4>10. การวัดและประเมินผลการเรียนรู้</h4>
      
    </div>
    <div class=\"tab-pane fade\" id=\"eleventh\">
      <h4>11. อื่นๆ (ครอบครัวสามารถเพิ่มเติมรายละเอียดที่เห็นว่าเป็นประโยชน์ต่อผู้เรียนได้)</h4>
      
    </div>-->
    <div class=\"clearfix\"></div>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6\">
      <button type=\"submit\" class=\"btn btn-lg btn-info\">Save</button>
      <button type=\"button\" data-request=\"onDelete\" data-request-confirm=\"Are you sure?\" class=\"btn btn-lg btn-danger\">Remove</button>
    </div>
  </div>
  <br>
</form>
";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/plugins/numthang/homeschool/components/courseform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 243,  380 => 236,  367 => 226,  354 => 216,  341 => 206,  328 => 196,  309 => 186,  297 => 176,  285 => 172,  272 => 162,  259 => 152,  246 => 142,  234 => 133,  221 => 123,  211 => 116,  196 => 104,  187 => 98,  178 => 92,  169 => 86,  160 => 80,  151 => 74,  141 => 67,  132 => 61,  123 => 55,  114 => 49,  105 => 43,  96 => 37,  82 => 25,  76 => 24,  72 => 23,  65 => 21,  60 => 18,  54 => 17,  48 => 16,  41 => 14,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"https://code.jquery.com/jquery-1.9.1.min.js\"></script>
<link id=\"bsdp-css\" href=\"https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/css/bootstrap-datepicker3.min.css\" rel=\"stylesheet\">
<script src=\"https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>

<script type=\"text/javascript\">
\$.fn.datepicker.defaults.format = \"dd/mm/yyyy\";
</script>


<form data-request=\"onSave\">
  <input type=\"hidden\" name=\"user_id\" value=\"{{ user.id }}\">
  <div class=\"row\">
    <div class=\"col-sm-6\">  
      <div class=\"form-group {% if errors.first('name') %} has-error {% endif %}\">
        <label>ชื่อแผนการศึกษา</label>
        <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Enter course name : {{ errors.first('name') }}\" value=\"{{ record.name }}\">
        {% if errors.first('name') %}<div class=\"alert alert-warning\" style=\"margin-top:4px;\">{{ errors.first('name') }}</div>{% endif %}
      </div>
    </div>
    <div class=\"col-sm-6\">  
      <div class=\"form-group {% if errors.first('hs_name') %} has-error {% endif %}\">
        <label>ชื่อบ้านเรียน</label>
        <input type=\"text\" class=\"form-control\" name=\"hs_name\" placeholder=\"Enter homeschool name : \" value=\"{{ record.hs_name }}\">
        {% if errors.first('hs_name') %}<div class=\"alert alert-warning\" style=\"margin-top:4px;\">{{ errors.first('hs_name') }}</div>{% endif %}
      </div>
    </div>
  </div>
  <div class=\"board-inner\">
    <div class=\"accordion\">
      <dl>
        <dt><a class=\"accordionTitle\" href=\"#\">1. ขอมูลพื้นฐานของครอบครัว</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>บิดา</label>
                <input type=\"text\" class=\"form-control\" name=\"father_name\" placeholder=\"Enter father's name\" value=\"{{ record.father_name }}\">
              </div>
            </div>
            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>วุฒิการศึกษา</label>
                <input type=\"text\" class=\"form-control\" name=\"father_degree\" placeholder=\"Enter father's degree\" value=\"{{ record.father_degree }}\">
              </div>
            </div>
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <label>ประสบการณ์</label>
                <textarea class=\"form-control\" name=\"father_exp\" placeholder=\"Enter father's experience\" rows=\"5\">{{ record.father_exp }}</textarea>
              </div>
            </div>
            <div class=\"col-sm-2\"> 
              <div class=\"form-group\">
                <label>อายุ</label>
                <input type=\"text\" class=\"form-control\" name=\"father_age\" placeholder=\"Age\" value=\"{{ record.father_age }}\">
              </div>
            </div>
            <div class=\"col-sm-4\"> 
              <div class=\"form-group\">
                <label>อาชีพ</label>
                <input type=\"text\" class=\"form-control\" name=\"father_job\" placeholder=\"Enter father's job\"  value=\"{{ record.father_job }}\">
              </div>
            </div>
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <label>ท่ี่อยู่</label>
                <input type=\"text\" class=\"form-control\" name=\"father_addr\" placeholder=\"Enter father's address\" value=\"{{ record.father_addr }}\">
              </div>
            </div>

            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>มารดา</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_name\" placeholder=\"Enter mother's name\" value=\"{{ record.mother_name }}\">
              </div>
            </div>
            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>วุฒิการศึกษา</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_degree\" placeholder=\"Enter mother's degree\" value=\"{{ record.mother_degree }}\">
              </div>
            </div>
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <label>ประสบการณ์</label>
                <textarea class=\"form-control\" name=\"mother_exp\" placeholder=\"Enter mother's experience\" rows=\"5\">{{ record.mother_exp }}</textarea>
              </div>
            </div>
            <div class=\"col-sm-2\"> 
              <div class=\"form-group\">
                <label>อายุ</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_age\" placeholder=\"Age\" value=\"{{ record.mother_age }}\">
              </div>
            </div>
            <div class=\"col-sm-4\"> 
              <div class=\"form-group\">
                <label>อาชีพ</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_job\" placeholder=\"Enter mother's job\" value=\"{{ record.mother_job }}\">
              </div>
            </div>
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <label>ที่อยู</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_addr\" placeholder=\"Enter mother's address\" value=\"{{ record.mother_addr }}\">
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">2. ขอมูลพื้นฐานของผูเรียน</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          2.1 ระบุขอมูลของผูเรียน
          <div class=\"row\">
            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>ชื่อ-สกุล</label>
                <input type=\"text\" class=\"form-control\" name=\"student_name\" placeholder=\"Enter student's name\" value=\"{{ record.student_name }}\">
              </div>
            </div>
            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>วัน เดือน ปเกิด</label>
                <div class=\"input-group date\" data-provide=\"datepicker\">
                  <input type=\"text\" class=\"form-control\" name=\"birth_date\" value=\"{{ record.birth_date }}\">
                    <div class=\"input-group-addon\">
                      <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
              </div>
            </div>
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <label>ประวัติการศึกษา (กรณีเรียนในระบบโรงเรียนมากอน)</label>
                <textarea class=\"form-control\" name=\"school_exp\" placeholder=\"Enter school's experience\" rows=\"5\">{{ record.school_exp }}</textarea>
              </div>
            </div>
          </div>
          2.2 พัฒนาการของผูเรียน (ระบุการพัฒนาการของผูเรียน/ความสามารถพิเศษ/ความ
    ตองการพิเศษ)
          <div class=\"row\">
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"hs_development\" placeholder=\"พัฒนาการตามวัย, พัฒนาการตามความสามารถพิเศษ หรือ พัฒนาการตามความตองการพิเศษ\" rows=\"10\">{{ record.hs_development }}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">3. ระดับที่จัดการศึกษา / เหตุผลในการจัดการศึกษาของครอบครัว</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"class_reason\" placeholder=\"ระดับชั้น เช่น ประถมศึกษา (ชั้น ป.1 – ป.3) เหตุผลในการจัดการศึกษาของครอบครัว\" rows=\"20\">{{ record.class_reason }}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">4. จุดมุงหมายของการจัดการศึกษา</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
          <div class=\"col-sm-12\"> 
            <div class=\"form-group\">
              <textarea class=\"form-control\" name=\"edu_purpose\" placeholder=\"ระบุความต้องการ เช่น ต้องการพึ่งตนเอง ลดค่าใช้จ่าย เป็นต้น\" rows=\"20\">{{ record.edu_purpose }}</textarea>
            </div>
          </div>
        </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">5. รูปแบบการจัดการศึกษา</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"edu_type\" placeholder=\"\" rows=\"20\">{% if record.edu_type is defined %} {{ record.edu_type }} {% else %} 1. จัดการศึกษาแบบครอบครัวเดียว เนื่องจากไมสามารถรวมกิจกรรมกับกลุม บานเรียน หรือครอบครัวอื่น และมีความสนใจเฉพาะดานแตกตางกัน
    2. จัดการศึกษาแบบมีขอตกลงรวมกับโรงเรียนหรือหนวยงานอื่น โดยมีการเขาไปใชทรัพยากรในโรงเรียนหรือเขาไปทํากิจกรรมรวมกัน เนื่องจากตองการใหบุตรไดมีความรูประสบการณที่สามารถเชื่อมโยงเขาสูระบบโรงเรียน
    3. จัดการศึกษาแบบกลุมครอบครัวที่มีแนวคิดคลายๆ กัน เปนการจําลองสังคมเล็กๆ เชื่อวาการ เชื่อมโยงกับกลุมเปนการชวยเสริมพัฒนาการของบุตรได
    4. จัดการศึกษาแบบรวมศูนย จัดการแบบศูนยการเรียน เนื่องจากตองการใหบุตรมีสังคมพอแมทํางานนอกบานทั้งคูจึงมอบหมายใหผูที่เห็นวามีความเหมาะสมมาทําหนาที่จัดกระบวนการเรียนรู
    5. อื่นๆ (ระบุ) {% endif %}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">6. โครงสร้างเวลาเรียน  (Schedule)</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"schedule\" placeholder=\"กลุ่มประสบการณ์ /กลุ่มสาระการเรียนรู้ (ตามตารางในข้อ 7)\" rows=\"20\">{% if record.schedule is defined %} {{ record.schedule }} {% else %} {% endif %}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">7. การจัดกลุ่มสาระการเรียนรู้ /กลุ่มประสบการณ์</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"curriculum\" placeholder=\"\" rows=\"20\">{{ record.curriculum }}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">8. การจัดกิจกรรมพัฒนาผู้เรียน</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"activity\" placeholder=\"\" rows=\"20\">{{ record.activity }}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">9. การจัดกระบวนการเรียนรู้</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"learning_procedure\" placeholder=\"\" rows=\"20\">{{ record.learning_procedure }}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">10. การวัดและประเมินผลการเรียนรู้</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"evaluate\" placeholder=\"\" rows=\"20\">{{ record.evaluate }}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">11. อื่นๆ (ครอบครัวสามารถเพิ่มเติมรายละเอียดที่เห็นว่าเป็นประโยชน์ต่อผู้เรียนได้)</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"other\" placeholder=\"\" rows=\"20\">{{ record.other }}</textarea>
              </div>
            </div>
          </div>
        </dd>
      </dl>
    </div>
    <script src=\"{{ ['assets/js/accordion.js']|theme }}\"></script>

    <!--<ul class=\"nav nav-tabs\" id=\"myTab\">
      <div class=\"liner\"></div>
      <li class=\"active\">
        <a href=\"#first\" data-toggle=\"tab\" title=\"ขอมูลพื้นฐานของครอบครัว\">
        <span class=\"round-tabs one\">
          1 
        </span> </a>
      </li>
      <li><a href=\"#second\" data-toggle=\"tab\" title=\"ขอมูลพื้นฐานของผูเรียน\">
        <span class=\"round-tabs two\">
          2
        </span> </a>
      </li>
      <li><a href=\"#third\" data-toggle=\"tab\" title=\"ระดับที่จัดการศึกษา / เหตุผลในการจัดการศึกษาของครอบครัว
\">
        <span class=\"round-tabs three\">
          3
        </span> </a>
      </li>
      <li><a href=\"#forth\" data-toggle=\"tab\" title=\"จุดมุงหมายของการจัดการศึกษา\">
        <span class=\"round-tabs four\">
          4
        </span> </a>
      </li>
      <li><a href=\"#fifth\" data-toggle=\"tab\" title=\"รูปแบบการจัดการศึกษา\">
        <span class=\"round-tabs five\">
          5
        </span> </a>
      </li>
      <li><a href=\"#sixth\" data-toggle=\"tab\" title=\"โครงสร้างเวลาเรียน\">
        <span class=\"round-tabs six\">
          6
        </span> </a>
      </li>
      <li><a href=\"#seventh\" data-toggle=\"tab\" title=\"การจัดกลุ่มสาระการเรียนรู้ /กลุ่มประสบการณ์\">
        <span class=\"round-tabs seven\">
          7
        </span> </a>
      </li>
      <li><a href=\"#eighth\" data-toggle=\"tab\" title=\"การจัดกิจกรรมพัฒนาผู้เรียน\">
        <span class=\"round-tabs eight\">
          8
        </span> </a>
      </li>
      <li><a href=\"#ninth\" data-toggle=\"tab\" title=\"การจัดกระบวนการเรียนรู้\">
        <span class=\"round-tabs nine\">
          9
        </span> </a>
      </li>
      <li><a href=\"#tenth\" data-toggle=\"tab\" title=\"การวัดและประเมินผลการเรียนรู้\">
        <span class=\"round-tabs ten\">
          10
        </span> </a>
      </li>
      <li><a href=\"#eleventh\" data-toggle=\"tab\" title=\"อื่นๆ\">
        <span class=\"round-tabs eleven\">
          11
        </span> </a>
      </li>
    </ul>
  </div>
  <div class=\"tab-content\">
    <div class=\"tab-pane fade in active\" id=\"first\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"second\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"third\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"forth\">
     
    </div>
    <div class=\"tab-pane fade\" id=\"fifth\">
      <h4>5. รูปแบบการจัดการศึกษา </h4>
      
    </div>
    <div class=\"tab-pane fade\" id=\"sixth\">
      <h4>6. โครงสร้างเวลาเรียน  (Schedule)</h4>
      
    </div>
    <div class=\"tab-pane fade\" id=\"seventh\">
      <h4>7. การจัดกลุ่มสาระการเรียนรู้ /กลุ่มประสบการณ์</h4>
      
    </div>
    <div class=\"tab-pane fade\" id=\"eighth\">
      <h4></h4>
      
    </div>
    <div class=\"tab-pane fade\" id=\"ninth\">
      <h4>9. การจัดกระบวนการเรียนรู้</h4>
      
    </div>
    <div class=\"tab-pane fade\" id=\"tenth\">
      <h4>10. การวัดและประเมินผลการเรียนรู้</h4>
      
    </div>
    <div class=\"tab-pane fade\" id=\"eleventh\">
      <h4>11. อื่นๆ (ครอบครัวสามารถเพิ่มเติมรายละเอียดที่เห็นว่าเป็นประโยชน์ต่อผู้เรียนได้)</h4>
      
    </div>-->
    <div class=\"clearfix\"></div>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6\">
      <button type=\"submit\" class=\"btn btn-lg btn-info\">Save</button>
      <button type=\"button\" data-request=\"onDelete\" data-request-confirm=\"Are you sure?\" class=\"btn btn-lg btn-danger\">Remove</button>
    </div>
  </div>
  <br>
</form>
", "/home/vsites/homeschool.in.th/plugins/numthang/homeschool/components/courseform/default.htm", "");
    }
}
