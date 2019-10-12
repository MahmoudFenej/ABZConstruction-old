// Card.js
import Card from '@material-ui/core/Card';
import CardActionArea from '@material-ui/core/CardActionArea';
import CardContent from '@material-ui/core/CardContent';
import CardMedia from '@material-ui/core/CardMedia';
import { withStyles } from '@material-ui/core/styles';
import Typography from '@material-ui/core/Typography';
import PropTypes from 'prop-types';
import React from 'react';

const styles = {
    card: {
        width: 320,
    },
    media: {
        height: 320,
    },
};

function MediaCard(props) {
    const { classes, image, title } = props;
    return (
        <Card className={classes.card}>
            <CardActionArea>
                <CardMedia
                    className={classes.media}
                    image={image}
                />
                <CardContent>
                    <Typography gutterBottom variant="h3" component="h3">
                        {title}
                    </Typography>
                </CardContent>
            </CardActionArea>

        </Card>
    );
}

MediaCard.propTypes = {
    classes: PropTypes.object.isRequired,
};

export default withStyles(styles)(MediaCard);