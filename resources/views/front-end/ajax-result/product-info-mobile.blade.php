<div class="row">
    <div class="col-sm-3 col-12">
        <label class="control-label possition-top" for="first-name">Add Type <span> *</span></label>
    </div>
    <div class="col-sm-9 col-12">
        <div class="form-group">
            <div class="radio radio-primary radio-inline">
                <input type="radio" id="inlineRadio1" value="used" name="condition" checked="">
                <label for="inlineRadio1">Used</label>
            </div>
            <div class="radio radio-primary radio-inline">
                <input type="radio" id="inlineRadio2" value="new" name="condition">
                <label for="inlineRadio2"> New </label>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-3 col-12">
        <label class="control-label" for="add-title">Ad Title <span> *</span></label>
    </div>
    <div class="col-sm-9 col-12">
        <div class="form-group">
            <input type="text" name="title" id="add-title" class="form-control" placeholder="First Name">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-3 col-12">
        <label class="control-label">Description<span> *</span></label>
    </div>
    <div class="col-sm-9 col-12">
        <div class="form-group">
            <textarea placeholder="What makes your ad unique" class="textarea form-control" name="discription" id="description" rows="4" cols="20" data-error="Message field is required" required></textarea>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-3 col-12">
        <label class="control-label" for="first-name">Set Price <span> *</span></label>
    </div>
    <div class="col-sm-9 col-12">
        <div class="form-group">
            <input type="text" name="price" id="describe-ad2" class="form-control price-box" placeholder="৳ Set your Price Here">
            <div class="radio radio-primary radio-inline">
                <input type="radio" id="inlineRadio3" value="fixed" name="price_type" checked="">
                <label for="inlineRadio3">fixed</label>
            </div>
            <div class="radio radio-primary radio-inline">
                <input type="radio" id="inlineRadio4" value="negotiable" name="price_type">
                <label for="inlineRadio4"> Negotiable </label>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-3 col-12">
        <label class="control-label" for="add-title">Upload Picture<span> *</span></label>
    </div>
    <div class="col-sm-9 col-12">
        <div class="form-group">
            <ul class="picture-upload">
                <li>
                    <input name="img_one" type="file" id="img-upload1" class="form-control">
                </li>
                <li>
                    <input name="img_two" type="file" id="img-upload2" class="form-control">
                </li>
                <li>
                    <input name="img_three" type="file" id="img-upload3" class="form-control">
                </li>
            </ul>
        </div>
    </div>
</div>