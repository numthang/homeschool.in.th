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
        echo "<form data-request=\"onSave\">
  <div class=\"board-inner\">
    <ul class=\"nav nav-tabs\" id=\"myTab\">
      <div class=\"liner\"></div>
      <li class=\"active\">
        <a href=\"#home\" data-toggle=\"tab\" title=\"welcome\">
        <span class=\"round-tabs one\">
          First 
        </span> </a>
      </li>
      <li><a href=\"#profile\" data-toggle=\"tab\" title=\"profile\">
        <span class=\"round-tabs two\">
          Second
        </span> </a>
      </li>
      <li><a href=\"#messages\" data-toggle=\"tab\" title=\"bootsnipp goodies\">
        <span class=\"round-tabs three\">
          Third
        </span> </a>
      </li>
      <li><a href=\"#settings\" data-toggle=\"tab\" title=\"blah blah\">
        <span class=\"round-tabs four\">
          Forth
        </span> </a>
      </li>
      <li><a href=\"#doner\" data-toggle=\"tab\" title=\"completed\">
        <span class=\"round-tabs five\">
          Fifth
        </span> </a>
      </li>
    </ul>
  </div>
  <div class=\"tab-content\">
    <h4>Family Basic Information</h4>
    <div class=\"tab-pane fade in active\" id=\"home\">
      <div class=\"row\">
        <div class=\"col-sm-12\">  
          <div class=\"form-group ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method")) {
            echo " has-error ";
        }
        echo "\">
            <label>Homeschool Name</label>
            <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Enter Homeschool name : ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method"), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-6\"> 
          <div class=\"form-group\">
            <label>Father's Name</label>
            <input type=\"text\" class=\"form-control\" name=\"father\" placeholder=\"Enter father's name\">
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
    <div class=\"tab-pane fade\" id=\"profile\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"messages\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"settings\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"doner\">
      
    </div>
    <div class=\"clearfix\"></div>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6\">
      <button type=\"submit\" class=\"btn btn-lg btn-info\">Save</button>
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
        return array (  69 => 40,  62 => 38,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form data-request=\"onSave\">
  <div class=\"board-inner\">
    <ul class=\"nav nav-tabs\" id=\"myTab\">
      <div class=\"liner\"></div>
      <li class=\"active\">
        <a href=\"#home\" data-toggle=\"tab\" title=\"welcome\">
        <span class=\"round-tabs one\">
          First 
        </span> </a>
      </li>
      <li><a href=\"#profile\" data-toggle=\"tab\" title=\"profile\">
        <span class=\"round-tabs two\">
          Second
        </span> </a>
      </li>
      <li><a href=\"#messages\" data-toggle=\"tab\" title=\"bootsnipp goodies\">
        <span class=\"round-tabs three\">
          Third
        </span> </a>
      </li>
      <li><a href=\"#settings\" data-toggle=\"tab\" title=\"blah blah\">
        <span class=\"round-tabs four\">
          Forth
        </span> </a>
      </li>
      <li><a href=\"#doner\" data-toggle=\"tab\" title=\"completed\">
        <span class=\"round-tabs five\">
          Fifth
        </span> </a>
      </li>
    </ul>
  </div>
  <div class=\"tab-content\">
    <h4>Family Basic Information</h4>
    <div class=\"tab-pane fade in active\" id=\"home\">
      <div class=\"row\">
        <div class=\"col-sm-12\">  
          <div class=\"form-group {% if errors.first('name') %} has-error {% endif %}\">
            <label>Homeschool Name</label>
            <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Enter Homeschool name : {{ errors.first('name') }}\">
          </div>
        </div>
        <div class=\"col-sm-6\"> 
          <div class=\"form-group\">
            <label>Father's Name</label>
            <input type=\"text\" class=\"form-control\" name=\"father\" placeholder=\"Enter father's name\">
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
    <div class=\"tab-pane fade\" id=\"profile\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"messages\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"settings\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"doner\">
      
    </div>
    <div class=\"clearfix\"></div>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6\">
      <button type=\"submit\" class=\"btn btn-lg btn-info\">Save</button>
    </div>
  </div>
  <br>
</form>
", "/home/vsites/homeschool.in.th/plugins/numthang/homeschool/components/courseform/default.htm", "");
    }
}
