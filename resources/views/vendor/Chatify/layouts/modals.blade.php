{{-- ---------------------- Image modal box ---------------------- --}}
<div id="imageModalBox" class="imageModal">
    <span class="imageModal-close">&times;</span>
    <img class="imageModal-content" id="imageModalBoxSrc">
  </div>
  
  {{-- ---------------------- Delete Modal ---------------------- --}}
  <div class="app-modal" data-name="delete">
      <div class="app-modal-container">
          <div class="app-modal-card" data-name="delete" data-modal='0'>
              <div class="app-modal-header">Voulez-vous vraiment le supprimer?</div>
              <div class="app-modal-body">
                Vous ne pouvez pas annuler cette action</div>
              <div class="app-modal-footer">
                  <a href="javascript:void(0)" class="app-btn cancel">Annuler</a>
                  <a href="javascript:void(0)" class="app-btn a-btn-danger delete">Supprimer</a>
              </div>
          </div>
      </div>
  </div>
  {{-- ---------------------- Alert Modal ---------------------- --}}
  <div class="app-modal" data-name="alert">
      <div class="app-modal-container">
          <div class="app-modal-card" data-name="alert" data-modal='0'>
              <div class="app-modal-header"></div>
              <div class="app-modal-body"></div>
              <div class="app-modal-footer">
                  <a href="javascript:void(0)" class="app-btn cancel">Annuler</a>
              </div>
          </div>
      </div>
  </div>
  {{-- ---------------------- Settings Modal ---------------------- --}}
  <div class="app-modal" data-name="settings">
    <div class="app-modal-container">
        <div class="app-modal-card" data-name="settings" data-modal='0'>
            <form id="updateAvatar" action="{{ route('avatar.update') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="app-modal-header">
                  Mettez à jour les paramètres de votre profil</div>
                <div class="app-modal-body">
                    {{-- Udate profile avatar --}}
                    <div class="avatar av-l upload-avatar-preview"
                    style="background-image: url('{{ asset('/storage/'.config('chatify.user_avatar.folder').'/'.Auth::user()->avatar) }}');"
                    ></div>
                    <p class="upload-avatar-details"></p>
                    <label class="app-btn a-btn-primary update button-mode-switch">
                      Télécharger une photo de profil
                        <input class="upload-avatar" accept="image/*" name="avatar" type="file" style="display: none" />
                    </label>
                    {{-- Dark/Light Mode  --}}
                    <p class="divider"></p>
                    <p class="app-modal-header">dark Mode <span class="
                      {{ Auth::user()->dark_mode > 0 ? 'fas' : 'far' }} fa-moon dark-mode-switch"
                       data-mode="{{ Auth::user()->dark_mode > 0 ? 1 : 0 }}"></span></p>
                    {{-- change messenger color  --}}
                    <p class="divider"></p>
                    <p class="app-modal-header">Changer la couleur de l'application</p>
                    <div class="update-messengerColor">
                          <a href="javascript:void(0)" class="messengerColor-1"></a>
                          <a href="javascript:void(0)" class="messengerColor-2"></a>
                          <a href="javascript:void(0)" class="messengerColor-3"></a>
                          <a href="javascript:void(0)" class="messengerColor-4"></a>
                          <a href="javascript:void(0)" class="messengerColor-5"></a>
                          <br/>
                          <a href="javascript:void(0)" class="messengerColor-6"></a>
                          <a href="javascript:void(0)" class="messengerColor-7"></a>
                          <a href="javascript:void(0)" class="messengerColor-8"></a>
                          <a href="javascript:void(0)" class="messengerColor-9"></a>
                          <a href="javascript:void(0)" class="messengerColor-10"></a>
                    </div>
                </div>
                <div class="app-modal-footer">
                    <a href="javascript:void(0)" class="app-btn cancel">Annuler</a>
                    <input type="submit" class="app-btn a-btn-success update button-mode-switch" value="Modifier" />
                </div>
            </form>
        </div>
    </div>
</div>
{{-- ---------------------- Settings Modal ---------------------- --}}
  <div class="app-modal" data-name="patch">
    <div class="app-modal-container">
        <div class="app-modal-card" data-name="patch" data-modal='0'>
                <div class="app-modal-header">
                 Patch Notes </div>
                <div class="app-modal-body">
                    <hr>
                    <p class="app-modal-header"> <b>Version : <span style="color: green " > {{ config('chatify.version') }} </span> </b></p>
                    <div class="update-messengerColor">
                          <p> <span style="color: green " ><i class="fas fa-wrench"></i></span>  Ajout des pp a coter des messages ( affiche l'image par défault du site) </p>
                          <p> <span style="color: green " ><i class="fas fa-wrench"></i></span>  Ajout des username au dessus des messages ( affiche user par défault ) </p>
                          <p> <span style="color: green " ><i class="fas fa-wrench"></i></span>  Modification de la page login register </p>
                          <p> <span style="color: green " ><i class="fas fa-wrench"></i></span>  Ajout de la page "Télécharger" pour pouvoir télécharger les applicattions sur la page login register </p>
                    </div>
                    <hr>
                    <p class="app-modal-header"> <b>Fixe Bug </b></p>
                    <div class="update-messengerColor">
                        <p> <span style="color: green " ><i class="fas fa-wrench"></i></span>  Le bug touchant le disfonctionnement de tous les script js a été réglé </p>
                    </div>
                    <hr>
                    <div class="update-messengerColor">
                        <p> Date Patch Note : 08/03/2021 à 19:11 </p>
                  </div>
                </div>
                <div class="app-modal-footer">
                    <a href="javascript:void(0)" class="app-btn cancel">Fermer</a>
                </div>
        </div>
    </div>
</div>    