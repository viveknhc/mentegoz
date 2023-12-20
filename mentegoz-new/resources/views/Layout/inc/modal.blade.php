<div class="contact-modal" id="contact-modal">
    <div class="modal-center scale">
        <div class="modal-details">
            <div class="head">
                <h3>Connect With Our Team</h3>
                <p> Our team will do their best to get back to you as soon as possible. </p>
            </div>
            <form action="">
                <div class="row g-3">
                    <div class="modal-items col-lg-6 col-12">
                        <input type="text" placeholder="Enter Name" class="inputmodal" required>
                    </div>
                    <div class="modal-items col-lg-6 col-12">
                        <input type="phone" placeholder="Enter Phone" class="inputmodal" required>
                    </div>
                    <div class="modal-items col-12">
                        <input type="mail" placeholder="Enter Email" class="inputmodal" required>
                    </div>
                    <div class="dropdown col-12">
                        <input type="text" class="dropdown-input dropdownmodal" readonly value="" placeholder="- select service -" required>
                        <ul class="dropdown-div">
                            <li name="" id="" class="dropdown-items" value="Website Development">Website Development</li>
                            <li name="" id="" class="dropdown-items" value="Digital Marketing">Digital Marketing</li>
                            <li name="" id="" class="dropdown-items" value="Branding & Designing">Branding & Designing</li>
                            <li name="" id="" class="dropdown-items" value="UI/UX Design">UI/UX Design</li>
                            <li name="" id="" class="dropdown-items" value="Application Development">Application Development</li>
                            <li name="" id="" class="dropdown-items" value="Software Development">Software Development</li>
                            <li name="" id="" class="dropdown-items" value="Other Services">Other Services</li>
                        </ul>
                    </div>
                    <div class="modal-items col-12">
                        <textarea name="" id="" cols="10" rows="5" class="textareamodal" placeholder="Comment Here"></textarea>
                    </div>
                    <div class="modal-items col-12 modal-bottom">
                        <div class="social-contact">
                            <!-- <i class="fa-brands social-icon fa-whatsapp"></i>
                        <i class="fa-solid fa-phone"></i>
                        <i class="fa-brands social-icon fa-mail"></i> -->
                            <a href="https://wa.me/+91 7012 727 621">
                                <img src="{{asset('web/assets/img/icons/social/whatsapp.webp'); }}" alt="">
                            </a>
                            <a href="tel:+91 7012 727 621">
                                <img src="{{asset('web/assets/img/icons/social/telephone.webp'); }}" alt="">
                            </a>
                            <a href="mailto:info@mentegoz.com">
                                <img src="{{asset('web/assets/img/icons/social/gmail.webp'); }}" alt="">
                            </a>
                        </div>
                        <div class="button">
                            <button class="modal-btn" type="submit">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="close">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
    </div>
</div>



<script>
    let dropdown_input_modal = document.querySelector('.dropdown-input')
    dropdown_input_modal.addEventListener('click', function() {
        document.querySelector('.dropdown-div').classList.add('active')
    })

    document.querySelectorAll('.dropdown-items').forEach((item) => {
        // console.log(item)
        item.addEventListener('click', function() {
            let services = item.getAttribute('value')
            dropdown_input_modal.value = services
            document.querySelector('.dropdown-div').classList.remove('active')

        })
    })

    document.body.addEventListener('click', event => {
        // check if the clicked element is the 'my-element' element or one of its children
        const clickedElement = event.target;
        const myElement = document.querySelector('.dropdown-input');
        if (myElement.contains(clickedElement)) {
            // do nothing if the clicked element is the 'my-element' element or one of its children
            return;
        }

        // remove the 'active' class from the 'my-element' element
        document.querySelector('.dropdown-div').classList.remove('active')
    });
</script>