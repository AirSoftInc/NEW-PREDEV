function getRfcInput(){
    const rfcInput = `
        <label for="rfc">RFC</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div id="color-div" class="input-group-text"><i id="color-i-icon" class="fas fa-key"></i></div>
            </div>
            <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC"  onblur="validateRfc(this.value, 'RFC')">
        </div>
    `;
    return rfcInput;
}

function getInstitutionAddres(){
    const institutionAddres = `
        <div class="col-lg-8 mb-3">
            <label for="address">Direcciòn</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div id="color-div" class="input-group-text"><i id="color-i-icon" class="fas fa-home"></i></div>
                </div>
                <input type="text" class="form-control" id="address" name="address"
                    placeholder="Direcciòn"  >
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <label for="city">Ciudad</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div id="color-div" class="input-group-text"><i id="color-i-icon" class="fas fa-city"></i></div>
                </div>
                <input type="text" class="form-control" id="city" name="city"
                    placeholder="Ciudad"  onblur="validateAlphanumeric(this.value, 'Ciudad')">
            </div>
        </div>
    `;

    return institutionAddres;
}

function getEmployeAddres() {
    const rfcInput = `
        <div class="col-lg-12 mb-3">
            <label for="city">Ciudad</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div id="color-div" class="input-group-text"><i id="color-i-icon" class="fas fa-city"></i></div>
                </div>
                <input type="text" class="form-control" id="city" name="city"
                    placeholder="Ciudad"  onblur="validateAlphanumeric(this.value, 'Ciudad')">
            </div>
        </div>
    `;
    return rfcInput;
}

function getAditionalIformation() {
    const aditionalInformation = `
        <div class="row">
            <div class="col-lg-12 mb-3">
                <h3 style="font-size: 25px;" class="title">Información<span>
                        adicional</span></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 mb-3">
                <label for="telephone">Teléfono</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div id="color-div" class="input-group-text"><i id="color-i-icon" class="fas fa-phone"></i></div>
                    </div>
                    <input type="text" class="form-control" id="telephone"
                        name="telephone" placeholder="Teléfono"  onblur="validateNumber(this.value, 'Teléfono')">
                </div>
            </div>
            <div class="col-lg-7 mb-3">
                <label for="facebook">Facebook</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div id="color-div" class="input-group-text"><i id="color-i-icon" class="fab fa-facebook-f"></i></div>
                    </div>
                    <input type="text" class="form-control" id="facebook"
                        name="facebook" placeholder="Facebook" >
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-5 mb-3">
                <label for="twitter">Twitter</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div id="color-div" class="input-group-text"><i id="color-i-icon" class="fab fa-twitter"></i></div>
                    </div>
                    <input type="text" class="form-control" id="twitter" name="twitter"
                        placeholder="Twitter" >
                </div>
            </div>
            <div class="col-lg-7 mb-3">
                <label for="webPage">Sitio web</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div id="color-div" class="input-group-text"><i id="color-i-icon" class="fas fa-globe"></i></div>
                    </div>
                    <input type="text" class="form-control" id="webPage" name="webPage"
                        placeholder="Sitio web" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea class="form-control" id="description" name="description"
                        rows="3"></textarea>
                </div>
            </div>
        </div>
    `;
    return aditionalInformation;
}