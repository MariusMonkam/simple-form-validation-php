<h1>form 3</h1>
<link rel="stylesheet" href="form3.css" type="text/css">

<form class="simpleValidation">
  <div class="fieldRow">
    <label>Title *</label>
    <input type="text" id="title" name="title" 
    class="required" />
  </div>
  <div class="fieldRow">
    <label>Url</label>
    <input type="text" id="url" name="url" 
    value="http://" />
  </div>
  <div class="fieldRow">
    <label>Labels</label>
    <input type="text" id="labels" name="labels" />
  </div>
  <div class="fieldRow">
    <label>Text *</label>
    <textarea id="textarea" class="required"></textarea>
  </div>
  <div class="fieldRow">
    <input type="submit" id="formSubmitter" value="Submit" disabled="disabled" />
  </div>
</form>