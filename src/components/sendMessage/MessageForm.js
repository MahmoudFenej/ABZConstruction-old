import React from 'react'
import { useTranslation } from 'react-i18next'
import 'bootstrap/dist/css/bootstrap.css';

export default function useMessageFormSection() {
    const { t } = useTranslation();
    return <div id="send-request" class="container-fluid" >
        <h2 class="text-center text-info"> {t("SEND_REQUEST")}</h2>
        <div id="errorMessage" class="text-danger text-center text-uppercase"></div>

        <form class="form-horizontal">

            <div class="form-group has-feedback has-success">
                <label for="inputName">{t("NAME")}</label>
                <input class="form-control" type="text" id="nameTxt" id="inputName" />
                {t("EMAIL_LBL")}<input class="form-control" type="text" id="emailTxt" value="" />
                {t("PHONE_NUMBER")}<input class="form-control" type="text" id="phoneTxt" value="" />
                {t("MESSAGE")}<textarea class="form-control" rows="8" cols="50" id="messageTxt"></textarea>
                <input class="submit btn-danger form-control" type="submit" id="submit" value="Send" />
            </div>
        </form>


    </div>
}
