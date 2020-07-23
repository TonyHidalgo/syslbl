<div class="modal fade" id="TomarFoto{{$student->id}}" tabindex="-1" role="dialog" aria-labelledby="TomarFotoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TomarFotoLabel">Tomar Fotografia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" class="form-login" action="{{ route('estudiantes.tomar_foto', $student) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label>Foto Estudiante: {{$student->DPApellidos}} {{$student->DPNombres}}</label>
                        <input type="file" accept="image/*" capture="camera" name="imgEst" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info"  placeholder="Upload Image">
                            <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Tomar</button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Foto Representante: {{$student->represent->DRApellidos}} {{$student->represent->DRNombres}}</label>
                        <input type="file" accept="image/*" capture="camera" name="imgRep" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Tomar</button>
                            </span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
