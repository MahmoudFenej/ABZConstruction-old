import React from 'react';
import styled from 'styled-components';

import { useSpring, animated } from 'react-spring';
import { useTranslation } from 'react-i18next';

const CollapseMenu = (props) => {
  const { open } = useSpring({ open: props.navbarState ? 0 : 1 });
  const { t } = useTranslation();
  if (props.navbarState === true) {
    return (
      <CollapseWrapper style={{
        transform: open.interpolate({
          range: [0, 0.2, 0.3, 1],
          output: [0, -20, 0, -200],
        }).interpolate(openValue => `translate3d(0, ${openValue}px, 0`),
      }}
      >
        <NavLinks>
          <li><a href="/" onClick={props.handleNavbar}>{t('HOME')}</a></li>
          <li><a href="/" onClick={props.handleNavbar}>{t('OUR_WORK')}</a></li>
          <li><a href="/" onClick={props.handleNavbar}>{t('ABOUT_US')}</a></li>
          <li><a href="/" onClick={props.handleNavbar}>{t('CONTACT_US')}</a></li>
          <li><a href="/" onClick={props.handleNavbar}>{t('SEND_REQUEST')}</a></li>
          <li><a href="/" onClick={props.handleNavbar}>{t('LANG')}</a></li>
        </NavLinks>
      </CollapseWrapper>
    );
  }
  return null;
};

export default CollapseMenu;

const CollapseWrapper = styled(animated.div)`
  background: #F8F8F8;
  position: fixed;
  top: 4.5rem;
  left: 0;
  right: 0;
  text-align:center;
`;

const NavLinks = styled.ul`
  list-style-type: none;
  padding: 2rem 1rem 2rem 2rem;

  & li {
    transition: all 300ms linear 0s;
  }

  & a {
    font-size: 1.4rem;
    line-height: 2;
    color: #696969;
    text-transform: uppercase;
    text-decoration: none;
    cursor: pointer;

    &:hover {
      color: #fdcb6e;
      border-bottom: 1px solid #fdcb6e;
    }
  }
`;