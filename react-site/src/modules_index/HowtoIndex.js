import React, {Component} from 'react';
import '../css/howto-index.css';

import logoo from '../img/logo_o.svg';

class HowtoIndex extends Component{
    render() {
        return(
            <div className="container-fluid howto-index">
                <div className="container">
                    <div className="row">
                        <div className="col-4 howto-left">
                            <img src={logoo} alt="logo Hexago"/>
                        </div>
                        <div className="col-8 howto-right">
                            <h4>Il Y A CERTAINES CHOSES A CONNAITRE POUR REUSSIR VOTRE RECHERCHE D4UN COMPAGNON DE VOYAGE</h4>

                            <p className="mt-5">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
                                <br />
                                Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.
                                <br /><br />
                                Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                                <br/><br />
                                On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default HowtoIndex;