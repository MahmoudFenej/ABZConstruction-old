import React from 'react'
import { useTranslation } from 'react-i18next'

export default function useContactUsSection() {
    const { t } = useTranslation();
    return <div class="container-fluid" id="contact-us" >
        <h2 class="text-center text-info"> {t("CONTACT_US")}</h2>
        <h2 class="text-info"> {t("FIRST_OFFICE")}</h2>
        <h3> {t("FIRST_OFFICE_ADDRESS")}</h3>
        <h2 class="text-info"> {t("SECOND_OFFICE")}</h2>
        <h3> {t("SECOND_OFFICE_ADDRESS")}</h3>
        <h2 class="text-info"> {t("DUBAI_OFFICE")}</h2>
        <h3> {t("DUBAI_OFFICE_ADDRESS")}</h3>
        <h2 class="text-info"> {t("PHONE_LEBANON")}</h2>
        <h3> {t("KIFAH")} + {t("KIFAH_PHONE")} ?></h3>
        <h3> {t("AMER")} + {t("AMER_PHONE")} ?></h3>
        <h2 class="text-info"> {t("DUBAI_PHONE_LBL")}</h2>
        <h3> {t("KIFAH")} + {t("KIFAH_DUBAI_PHONE")} ?></h3>
        <h2 class="text-info"> {t("EMAIL_LBL")}</h2>
        <h3> {t("EMAIL")}</h3>
    </div>
}
