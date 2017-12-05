var elForm, elSelectPackage, elPackageHint, elTerms, elTermsHint;
elForm = document.getElementById('formSignup');
elSelectPackage = document.getElementById('package');
elPackageHint = document.getElementById('packageHint');
elTerms = document.getElementById('terms');
elTermsHint = document.getElementById('termsHint');

function packageHint(){
    var package = this.options[this.selectedIndex].value;
    if(package === 'monthly')
        elPackageHint.innerHTML = 'you can lass 10';
    else
        elPackageHint.innerHTML = 'chouse great';
}

function checkTerms(Event){
    if(!elTerms.checked){
        elTermsHint.innerHTML = 'you have to agree with this';
        Event.preventDefault();
    }
}

elForm.addEventListener('submit', checkTerms, false);
elSelectPackage.addEventListener('change', packageHint, false);