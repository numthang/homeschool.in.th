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
        <label>Course Name</label>
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
        <label>Homeschool Name</label>
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
    <ul class=\"nav nav-tabs\" id=\"myTab\">
      <div class=\"liner\"></div>
      <li class=\"active\">
        <a href=\"#first\" data-toggle=\"tab\" title=\"First\">
        <span class=\"round-tabs one\">
          1 
        </span> </a>
      </li>
      <li><a href=\"#second\" data-toggle=\"tab\" title=\"Second\">
        <span class=\"round-tabs two\">
          2
        </span> </a>
      </li>
      <li><a href=\"#third\" data-toggle=\"tab\" title=\"Third\">
        <span class=\"round-tabs three\">
          3
        </span> </a>
      </li>
      <li><a href=\"#forth\" data-toggle=\"tab\" title=\"Forth\">
        <span class=\"round-tabs four\">
          4
        </span> </a>
      </li>
      <li><a href=\"#fifth\" data-toggle=\"tab\" title=\"Fifth\">
        <span class=\"round-tabs five\">
          5
        </span> </a>
      </li>
      <li><a href=\"#sixth\" data-toggle=\"tab\" title=\"Sixth\">
        <span class=\"round-tabs six\">
          6
        </span> </a>
      </li>
      <li><a href=\"#seventh\" data-toggle=\"tab\" title=\"Seventh\">
        <span class=\"round-tabs seven\">
          7
        </span> </a>
      </li>
      <li><a href=\"#eighth\" data-toggle=\"tab\" title=\"Eighth\">
        <span class=\"round-tabs eight\">
          8
        </span> </a>
      </li>
      <li><a href=\"#ninth\" data-toggle=\"tab\" title=\"Ninth\">
        <span class=\"round-tabs nine\">
          9
        </span> </a>
      </li>
      <li><a href=\"#tenth\" data-toggle=\"tab\" title=\"Tenth\">
        <span class=\"round-tabs ten\">
          10
        </span> </a>
      </li>
      <li><a href=\"#eleventh\" data-toggle=\"tab\" title=\"Eleventh\">
        <span class=\"round-tabs eleven\">
          11
        </span> </a>
      </li>
    </ul>
  </div>
  <div class=\"tab-content\">
    <div class=\"tab-pane fade in active\" id=\"first\">
      <h4>Family Basic Information</h4>
      <div class=\"row\">
        <div class=\"col-sm-6\"> 
          <div class=\"form-group\">
            <label>Father's Name</label>
            <input type=\"text\" class=\"form-control\" name=\"father_name\" placeholder=\"Enter father's name\">
          </div>
        </div>
        <div class=\"col-sm-6\"> 
          <div class=\"form-group\">
            <label>Father's Degree</label>
            <input type=\"text\" class=\"form-control\" name=\"father_degree\" placeholder=\"Enter father's degree\">
          </div>
        </div>
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <label>Father's Experience</label>
            <textarea class=\"form-control\" name=\"father_exp\" placeholder=\"Enter father's experience\" rows=\"5\"></textarea>
          </div>
        </div>
        <div class=\"col-sm-2\"> 
          <div class=\"form-group\">
            <label>Father's Age</label>
            <input type=\"text\" class=\"form-control\" name=\"father_age\" placeholder=\"Age\">
          </div>
        </div>
        <div class=\"col-sm-4\"> 
          <div class=\"form-group\">
            <label>Father's Job</label>
            <input type=\"text\" class=\"form-control\" name=\"father_job\" placeholder=\"Enter father's job\">
          </div>
        </div>
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <label>Father's address</label>
            <input type=\"text\" class=\"form-control\" name=\"father_addr\" placeholder=\"Enter father's address\">
          </div>
        </div>

        <div class=\"col-sm-6\"> 
          <div class=\"form-group\">
            <label>Mother's Name</label>
            <input type=\"text\" class=\"form-control\" name=\"mother\" placeholder=\"Enter mother's name\">
          </div>
        </div>
        <div class=\"col-sm-6\"> 
          <div class=\"form-group\">
            <label>Mother's Degree</label>
            <input type=\"text\" class=\"form-control\" name=\"mother_degree\" placeholder=\"Enter mother's degree\">
          </div>
        </div>
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <label>Mother's Experience</label>
            <textarea class=\"form-control\" name=\"mother_exp\" placeholder=\"Enter mother's experience\" rows=\"5\"></textarea>
          </div>
        </div>
        <div class=\"col-sm-2\"> 
          <div class=\"form-group\">
            <label>Mother's Age</label>
            <input type=\"text\" class=\"form-control\" name=\"mother_age\" placeholder=\"Age\">
          </div>
        </div>
        <div class=\"col-sm-4\"> 
          <div class=\"form-group\">
            <label>Mother's Job</label>
            <input type=\"text\" class=\"form-control\" name=\"mother_job\" placeholder=\"Enter mother's job\">
          </div>
        </div>
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <label>Mother's address</label>
            <input type=\"text\" class=\"form-control\" name=\"mother_addr\" placeholder=\"Enter mother's address\">
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"second\">
      <h4>Homeschooler Profile</h4>
      2.1 Homeschooler Information
      <div class=\"row\">
        <div class=\"col-sm-6\"> 
          <div class=\"form-group\">
            <label>Student's Name</label>
            <input type=\"text\" class=\"form-control\" name=\"student_name\" placeholder=\"Enter student's name\">
          </div>
        </div>
        <div class=\"col-sm-6\"> 
          <div class=\"form-group\">
            <label>Birthday</label>
            <div class=\"input-group date\" data-provide=\"datepicker\">
              <input type=\"text\" class=\"form-control\" name=\"birth_date\">
                <div class=\"input-group-addon\">
                  <span class=\"glyphicon glyphicon-th\"></span>
                </div>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <label>School's Experience</label>
            <textarea class=\"form-control\" name=\"school_exp\" placeholder=\"Enter school's experience\" rows=\"5\"></textarea>
          </div>
        </div>
      </div>
      2.2 Homeschooler Development
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"hs_development\" placeholder=\"พัฒนาการตามวัย, พัฒนาการตามความสามารถพิเศษ หรือ พัฒนาการตามความตองการพิเศษ\" rows=\"10\"></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"third\">
      <h4>Class and Reason</h4>
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"class_reason\" placeholder=\"ระดับชั้น เช่น ประถมศึกษา (ชั้น ป.1 – ป.3) เหตุผลในการจัดการศึกษาของครอบครัว\" rows=\"20\"></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"forth\">
      <h4>Education Purpose</h4>
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"edu_purpose\" placeholder=\"ระบุความต้องการ เช่น ต้องการพึ่งตนเอง ลดค่าใช้จ่าย เป็นต้น\" rows=\"20\"></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"fifth\">
      <h4>Education Type</h4>
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"edu_type\" placeholder=\"\" rows=\"20\">1. จัดการศึกษาแบบครอบครัวเดียว เนื่องจากไมสามารถรวมกิจกรรมกับกลุม บานเรียน หรือครอบครัวอื่น และมีความสนใจเฉพาะดานแตกตางกัน
2. จัดการศึกษาแบบมีขอตกลงรวมกับโรงเรียนหรือหนวยงานอื่น โดยมีการเขาไปใชทรัพยากรในโรงเรียนหรือเขาไปทํากิจกรรมรวมกัน เนื่องจากตองการใหบุตรไดมีความรูประสบการณที่สามารถเชื่อมโยงเขาสูระบบโรงเรียน
3. จัดการศึกษาแบบกลุมครอบครัวที่มีแนวคิดคลายๆ กัน เปนการจําลองสังคมเล็กๆ เชื่อวาการ เชื่อมโยงกับกลุมเปนการชวยเสริมพัฒนาการของบุตรได
4. จัดการศึกษาแบบรวมศูนย จัดการแบบศูนยการเรียน เนื่องจากตองการใหบุตรมีสังคมพอแมทํางานนอกบานทั้งคูจึงมอบหมายใหผูที่เห็นวามีความเหมาะสมมาทําหนาที่จัดกระบวนการเรียนรู
5. อื่นๆ (ระบุ)</textarea>
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"sixth\">
      <h4>Schedule Structure</h4>
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"schedule\" placeholder=\"\" rows=\"20\">กลุ่มประสบการณ์ /กลุ่มสาระการเรียนรู้ (ตามตารางในข้อ 7)</textarea>
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"seventh\">
      <h4>Seventh</h4>
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"edu_purpose\" placeholder=\"\" rows=\"20\"></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"eighth\">
      <h4>Eighth</h4>
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"edu_purpose\" placeholder=\"\" rows=\"20\"></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"ninth\">
      <h4>ninth</h4>
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"edu_purpose\" placeholder=\"\" rows=\"20\"></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"tenth\">
      <h4>tenth</h4>
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"edu_purpose\" placeholder=\"\" rows=\"20\"></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"eleventh\">
      <h4>eleventh</h4>
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"edu_purpose\" placeholder=\"\" rows=\"20\"></textarea>
          </div>
        </div>
      </div>
    </div>
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
        return array (  82 => 25,  76 => 24,  72 => 23,  65 => 21,  60 => 18,  54 => 17,  48 => 16,  41 => 14,  35 => 11,  23 => 1,);
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
        <label>Course Name</label>
        <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Enter course name : {{ errors.first('name') }}\" value=\"{{ record.name }}\">
        {% if errors.first('name') %}<div class=\"alert alert-warning\" style=\"margin-top:4px;\">{{ errors.first('name') }}</div>{% endif %}
      </div>
    </div>
    <div class=\"col-sm-6\">  
      <div class=\"form-group {% if errors.first('hs_name') %} has-error {% endif %}\">
        <label>Homeschool Name</label>
        <input type=\"text\" class=\"form-control\" name=\"hs_name\" placeholder=\"Enter homeschool name : \" value=\"{{ record.hs_name }}\">
        {% if errors.first('hs_name') %}<div class=\"alert alert-warning\" style=\"margin-top:4px;\">{{ errors.first('hs_name') }}</div>{% endif %}
      </div>
    </div>
  </div>
  <div class=\"board-inner\">
    <ul class=\"nav nav-tabs\" id=\"myTab\">
      <div class=\"liner\"></div>
      <li class=\"active\">
        <a href=\"#first\" data-toggle=\"tab\" title=\"First\">
        <span class=\"round-tabs one\">
          1 
        </span> </a>
      </li>
      <li><a href=\"#second\" data-toggle=\"tab\" title=\"Second\">
        <span class=\"round-tabs two\">
          2
        </span> </a>
      </li>
      <li><a href=\"#third\" data-toggle=\"tab\" title=\"Third\">
        <span class=\"round-tabs three\">
          3
        </span> </a>
      </li>
      <li><a href=\"#forth\" data-toggle=\"tab\" title=\"Forth\">
        <span class=\"round-tabs four\">
          4
        </span> </a>
      </li>
      <li><a href=\"#fifth\" data-toggle=\"tab\" title=\"Fifth\">
        <span class=\"round-tabs five\">
          5
        </span> </a>
      </li>
      <li><a href=\"#sixth\" data-toggle=\"tab\" title=\"Sixth\">
        <span class=\"round-tabs six\">
          6
        </span> </a>
      </li>
      <li><a href=\"#seventh\" data-toggle=\"tab\" title=\"Seventh\">
        <span class=\"round-tabs seven\">
          7
        </span> </a>
      </li>
      <li><a href=\"#eighth\" data-toggle=\"tab\" title=\"Eighth\">
        <span class=\"round-tabs eight\">
          8
        </span> </a>
      </li>
      <li><a href=\"#ninth\" data-toggle=\"tab\" title=\"Ninth\">
        <span class=\"round-tabs nine\">
          9
        </span> </a>
      </li>
      <li><a href=\"#tenth\" data-toggle=\"tab\" title=\"Tenth\">
        <span class=\"round-tabs ten\">
          10
        </span> </a>
      </li>
      <li><a href=\"#eleventh\" data-toggle=\"tab\" title=\"Eleventh\">
        <span class=\"round-tabs eleven\">
          11
        </span> </a>
      </li>
    </ul>
  </div>
  <div class=\"tab-content\">
    <div class=\"tab-pane fade in active\" id=\"first\">
      <h4>Family Basic Information</h4>
      <div class=\"row\">
        <div class=\"col-sm-6\"> 
          <div class=\"form-group\">
            <label>Father's Name</label>
            <input type=\"text\" class=\"form-control\" name=\"father_name\" placeholder=\"Enter father's name\">
          </div>
        </div>
        <div class=\"col-sm-6\"> 
          <div class=\"form-group\">
            <label>Father's Degree</label>
            <input type=\"text\" class=\"form-control\" name=\"father_degree\" placeholder=\"Enter father's degree\">
          </div>
        </div>
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <label>Father's Experience</label>
            <textarea class=\"form-control\" name=\"father_exp\" placeholder=\"Enter father's experience\" rows=\"5\"></textarea>
          </div>
        </div>
        <div class=\"col-sm-2\"> 
          <div class=\"form-group\">
            <label>Father's Age</label>
            <input type=\"text\" class=\"form-control\" name=\"father_age\" placeholder=\"Age\">
          </div>
        </div>
        <div class=\"col-sm-4\"> 
          <div class=\"form-group\">
            <label>Father's Job</label>
            <input type=\"text\" class=\"form-control\" name=\"father_job\" placeholder=\"Enter father's job\">
          </div>
        </div>
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <label>Father's address</label>
            <input type=\"text\" class=\"form-control\" name=\"father_addr\" placeholder=\"Enter father's address\">
          </div>
        </div>

        <div class=\"col-sm-6\"> 
          <div class=\"form-group\">
            <label>Mother's Name</label>
            <input type=\"text\" class=\"form-control\" name=\"mother\" placeholder=\"Enter mother's name\">
          </div>
        </div>
        <div class=\"col-sm-6\"> 
          <div class=\"form-group\">
            <label>Mother's Degree</label>
            <input type=\"text\" class=\"form-control\" name=\"mother_degree\" placeholder=\"Enter mother's degree\">
          </div>
        </div>
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <label>Mother's Experience</label>
            <textarea class=\"form-control\" name=\"mother_exp\" placeholder=\"Enter mother's experience\" rows=\"5\"></textarea>
          </div>
        </div>
        <div class=\"col-sm-2\"> 
          <div class=\"form-group\">
            <label>Mother's Age</label>
            <input type=\"text\" class=\"form-control\" name=\"mother_age\" placeholder=\"Age\">
          </div>
        </div>
        <div class=\"col-sm-4\"> 
          <div class=\"form-group\">
            <label>Mother's Job</label>
            <input type=\"text\" class=\"form-control\" name=\"mother_job\" placeholder=\"Enter mother's job\">
          </div>
        </div>
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <label>Mother's address</label>
            <input type=\"text\" class=\"form-control\" name=\"mother_addr\" placeholder=\"Enter mother's address\">
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"second\">
      <h4>Homeschooler Profile</h4>
      2.1 Homeschooler Information
      <div class=\"row\">
        <div class=\"col-sm-6\"> 
          <div class=\"form-group\">
            <label>Student's Name</label>
            <input type=\"text\" class=\"form-control\" name=\"student_name\" placeholder=\"Enter student's name\">
          </div>
        </div>
        <div class=\"col-sm-6\"> 
          <div class=\"form-group\">
            <label>Birthday</label>
            <div class=\"input-group date\" data-provide=\"datepicker\">
              <input type=\"text\" class=\"form-control\" name=\"birth_date\">
                <div class=\"input-group-addon\">
                  <span class=\"glyphicon glyphicon-th\"></span>
                </div>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <label>School's Experience</label>
            <textarea class=\"form-control\" name=\"school_exp\" placeholder=\"Enter school's experience\" rows=\"5\"></textarea>
          </div>
        </div>
      </div>
      2.2 Homeschooler Development
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"hs_development\" placeholder=\"พัฒนาการตามวัย, พัฒนาการตามความสามารถพิเศษ หรือ พัฒนาการตามความตองการพิเศษ\" rows=\"10\"></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"third\">
      <h4>Class and Reason</h4>
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"class_reason\" placeholder=\"ระดับชั้น เช่น ประถมศึกษา (ชั้น ป.1 – ป.3) เหตุผลในการจัดการศึกษาของครอบครัว\" rows=\"20\"></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"forth\">
      <h4>Education Purpose</h4>
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"edu_purpose\" placeholder=\"ระบุความต้องการ เช่น ต้องการพึ่งตนเอง ลดค่าใช้จ่าย เป็นต้น\" rows=\"20\"></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"fifth\">
      <h4>Education Type</h4>
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"edu_type\" placeholder=\"\" rows=\"20\">1. จัดการศึกษาแบบครอบครัวเดียว เนื่องจากไมสามารถรวมกิจกรรมกับกลุม บานเรียน หรือครอบครัวอื่น และมีความสนใจเฉพาะดานแตกตางกัน
2. จัดการศึกษาแบบมีขอตกลงรวมกับโรงเรียนหรือหนวยงานอื่น โดยมีการเขาไปใชทรัพยากรในโรงเรียนหรือเขาไปทํากิจกรรมรวมกัน เนื่องจากตองการใหบุตรไดมีความรูประสบการณที่สามารถเชื่อมโยงเขาสูระบบโรงเรียน
3. จัดการศึกษาแบบกลุมครอบครัวที่มีแนวคิดคลายๆ กัน เปนการจําลองสังคมเล็กๆ เชื่อวาการ เชื่อมโยงกับกลุมเปนการชวยเสริมพัฒนาการของบุตรได
4. จัดการศึกษาแบบรวมศูนย จัดการแบบศูนยการเรียน เนื่องจากตองการใหบุตรมีสังคมพอแมทํางานนอกบานทั้งคูจึงมอบหมายใหผูที่เห็นวามีความเหมาะสมมาทําหนาที่จัดกระบวนการเรียนรู
5. อื่นๆ (ระบุ)</textarea>
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"sixth\">
      <h4>Schedule Structure</h4>
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"schedule\" placeholder=\"\" rows=\"20\">กลุ่มประสบการณ์ /กลุ่มสาระการเรียนรู้ (ตามตารางในข้อ 7)</textarea>
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"seventh\">
      <h4>Seventh</h4>
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"edu_purpose\" placeholder=\"\" rows=\"20\"></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"eighth\">
      <h4>Eighth</h4>
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"edu_purpose\" placeholder=\"\" rows=\"20\"></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"ninth\">
      <h4>ninth</h4>
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"edu_purpose\" placeholder=\"\" rows=\"20\"></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"tenth\">
      <h4>tenth</h4>
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"edu_purpose\" placeholder=\"\" rows=\"20\"></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"eleventh\">
      <h4>eleventh</h4>
      <div class=\"row\">
        <div class=\"col-sm-12\"> 
          <div class=\"form-group\">
            <textarea class=\"form-control\" name=\"edu_purpose\" placeholder=\"\" rows=\"20\"></textarea>
          </div>
        </div>
      </div>
    </div>
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
