<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card bg-transparent" style="width: 22rem;">
                <div class="card-body">
                    <img style="height: 150px;width: 150px; border-radius: 50%" class="imgProfil" src="{{asset("img/".Auth::user()->src)}}" alt="">
                </div>
            </div>
            <div class="card bg-transparent mt-5" style="width: 22rem;">
                <div class="alert alert-secondary" style="font-size: 20px">Profil</div>
                <div class="card-body">
                  <ul style="list-style: none">
                      <li class="mb-3"><img style="height: 20px; margin-right: 20px" src="{{asset('img/icon/notebook.PNG')}}" alt=""><a href="" style="font-size: 18px">Mes cours</a></li>
                      <li class="mb-3"><img style="height: 20px; margin-right: 20px" src="{{asset('img/icon/user.PNG')}}" alt=""><a href="" style="font-size: 18px">Éditer Profil</a></li>
                  </ul>
                </div>
            </div>
        </div>
        <div class="col-8 text-center">
            <div class="mt-5 ml-5">
                <h3  style="font-weight: bold">Bienvenue sur MyMolengeek</h3>
            </div>
            <div class="mt-5 ml-5">
                <h5 style="font-weight: bolder; color: #FA824C">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus neque, id mollitia consectetur eaque doloremque optio, hic sit, ea quo autem inventore dolor.</h5>
            </div>
            <div class="mt-5 ml-5 ">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam facere atque hic minus provident impedit at praesentium dolor neque, molestias corrupti accusamus autem.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus optio nihil tempore explicabo consequuntur inventore dignissimos molestiae eos consectetur laborum excepturi aliquid quibusdam ipsam maxime distinctio repellat assumenda, non, voluptatum nemo magni! Odio commodi exercitationem earum voluptas omnis enim nesciunt?</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur exercitationem minus quae in animi!</p>
            </div>
        </div>
    </div>
</div>