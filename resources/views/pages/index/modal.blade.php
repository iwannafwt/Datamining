<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <p>Διαβάστε περισσότερα σχετικά με τις επιλογές πού μπορείτε να κάνετε</p>
            </div>
            <div class="modal-body">
                <p>Ο κάθε πίνακας περιέχει διαφορετικό αριθμό στηλών.
                    Οι επιλογές των στηλών που μπορείτε να κάνετε για τον κάθε πίνακα εμφανίζονται αναλυτικά παρακάτω.</p>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="50%">Όνομα πίνακα</th>
                        <th width="25%">Από στήλη</th>
                        <th width="25%">Εως στήλη</th>
                    </tr>
                    </thead>
                </table>
                @include('pages.index.datasetTable')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Κλείσιμο</button>
            </div>
        </div>
    </div>
</div>