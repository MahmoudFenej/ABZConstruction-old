import React from 'react';
import { useTranslation } from 'react-i18next';



export default function useHomeSection() {
    const { t } = useTranslation();
    return (
        <div id="home" class="jumbotron container">
            <h3 class="text-center text-info"> {t('WHAT_IS_ABZ')}</h3>
            <p> {t('HOME_COMPANY_DEFINITION')} </p>
        </div>
    )
}
