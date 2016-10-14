<div class="container" style="margin-top:130px">
  <h4 class="modal-title text-center" style="margin-bottom:20px">Profile</h4>
  <div class="row">
    <div class="col-md-9 col-xs-12">
      <div class="row" style="margin-bottom:20px">
        <div class="col-md-3 col-xs-3">
          <div>
            <img src="<?php echo base_url('asset/images/profil2.jpg')?>" alt=Img class="img-responsive">
          </div>
        </div>
        <div class="col-md-9 col-xs-9 profile">
          <h2 style="margin-top:0px">Abrar</h2>
          <h2><p><i>Alumni since 12 oct 2016</i></p></h2>
        </div>
      <div class="row" style="margin-right:10px">
        <div class="col-md-9"></div>
        <div class="col-md-3">
          <a href="#" class="profile" data-toggle="modal" data-target="#editPhoto">
            <button class="btn btn-default btn-block dropdown-toggle">
              <i class="fa fa-upload fa-fw"></i>  Upload Certified
            </button>
          </a>

        </div>
      </div>
      </div>
      <table class="table table-striped profile" style="border:1px solid #ddd">
        <thead> 
          <tr>
            <td>No.</td>
            <td>Sertifikat</td>
            <td>Nama</td>
            <td>Tahun</td>
            <td>Lembaga</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td style="padding-top:5px"><img src="<?php echo base_url('asset/images/sertifikat.png')?>" alt=Img class="img-responsive" style="height:100px;width:200px"></td>
            <td>Cisco Certifications</td>
            <td>2015</td>
            <td>Cisco Systems,Inc.</td>
            <td style="padding-top:30px">
              <button class="btn btn-default dropdown-toggle">
                <i class="fa fa-pencil"></i>
              </button>
              <button class="btn btn-default dropdown-toggle">
                <i class="fa fa-trash"></i>
              </button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td style="padding-top:5px"><img src="<?php echo base_url('asset/images/sertifikat.png')?>" alt=Img class="img-responsive" style="height:100px;width:200px"></td>
            <td>Cisco Certifications</td>
            <td>2015</td>
            <td>Cisco Systems,Inc.</td>
            <td style="padding-top:30px">
              <button class="btn btn-default dropdown-toggle">
                <i class="fa fa-pencil"></i>
              </button>
              <button class="btn btn-default dropdown-toggle">
                <i class="fa fa-trash"></i>
              </button>
            </td>
          </tr>
        </tbody>
  </table>
  </div>
    <div class="col-md-3 col-xs-6">
      <ul class="member-sidebar" style="list-style:none">
        <li>
          <a href="#"><i class="fa fa-home" aria-hidden="true"></i>Dashboard</a>
        </li>
        <li>
          <a href="editprofile.html"><i class="fa fa-user" aria-hidden="true"></i>Edit Profile</a>
        </li>
        <li>
          <a href="ChangePassword.html"><i class="fa fa-key" aria-hidden="true"></i>Change Password</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-certificate" aria-hidden="true"></i>Certified</a>
        </li>
      </ul>
    </div>
    </div>
  </div>
</div>

<div id="editPhoto" class="modal fade in" role="dialog">
  <div class="modal-dialog modal-lg product-modal">
    <div class="modal-content flat text-center" style="border-radius:0px">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <i class="fa fa-close fa-2x"></i>
        </button>
        <h4 class="modal-title">Upload Certified</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6" style="border-right:1px solid #e0e0e0">
            <div class="input-group margin-bottom-sm form-group">
              <span class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
                <input class="form-control" type="text" placeholder="Nama Sertifikat">
            </div>
            <div class="input-group margin-bottom-sm form-group">
              <span class="input-group-addon"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></span>
                <input class="form-control" type="text" placeholder="Tahun">
            </div>
            <div class="input-group margin-bottom-sm form-group">
              <span class="input-group-addon"><i class="fa fa-home fa-fw" aria-hidden="true"></i></span>
                <input class="form-control" type="text" placeholder="Lembaga">
            </div>
          </div>
          <div class="col-md-6" style="border-radius:0px;margin-top:50px">
            <div class="form-group">
              <input type="file" accept="image/*" onchange="showMyImage(this)">
            </div>
          </div>
        </div><br/>
        <button class="btn btn-md form-control vcd-btn-primary" style="border-radius:0px"><i class="fa fa-floppy-o" aria-hidden="true"></i>  Save Changes</button>
      </div>
    </div>
  </div>
</div>