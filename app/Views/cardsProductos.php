<?php foreach ($productos as $p ) :?>
    <div class="pure-u-1-3">
        
        <p></p>
        <p></p>
    </div>


    <div class="pure-u-1 pure-u-md-1-3">
            <div class="pricing-table pricing-table-biz pricing-table-selected">
                <div class="pricing-table-header">
         

                    <span class="pricing-table-price">
                        $25 <span>per month</span>
                    </span>
                </div>
                <p><?=$p->Descripcion ?></p>
                <ul class="pricing-table-list">
                    <li>Free setup</li>
                    <li>Use your own domain</li>
                    <li>Standard customer support</li>
                    <li>10GB file storage</li>
                    <li>5 databases</li>
                    <li>Unlimited bandwidth</li>
                </ul>

                <button class="button-choose pure-button">Choose</button>
            </div>
        </div>
<?php endforeach ?>