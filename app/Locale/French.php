<?php

/** @noinspection SpellCheckingInspection */

namespace App\Locale;

use App\Contracts\Language;

final class French implements Language
{
	public function code(): string
	{
		return 'fr';
	}

	public function get_locale(): array
	{
		return [
			'USERNAME' => 'Nom d’utilisateur',
			'PASSWORD' => 'Mot de passe',
			'ENTER' => 'OK',
			'CANCEL' => 'Annuler',
			'SIGN_IN' => 'Connexion',
			'CLOSE' => 'Fermer',
			'SETTINGS' => 'Paramètres',
			'SEARCH' => 'Rechercher…',
			'MORE' => 'Plus',
			'DEFAULT' => 'Valeur par défaut',
			'GALLERY' => 'Gallery',

			'USERS' => 'Utilisateurs',
			'CREATE' => 'Créer',
			'REMOVE' => 'Retirer',
			'SHARE' => 'Partager',
			'U2F' => 'U2F',
			'NOTIFICATIONS' => 'Informations',
			'SHARING' => 'Partage',
			'CHANGE_LOGIN' => 'Changer le nom d’utilisateur',
			'CHANGE_SORTING' => 'Changer le tri',
			'SET_DROPBOX' => 'Paramétrer Dropbox',
			'ABOUT_LYCHEE' => 'À propos de Lychee',
			'DIAGNOSTICS' => 'Diagnostiques',
			'DIAGNOSTICS_GET_SIZE' => 'Calculer l’espace utilisé',
			'LOGS' => 'Afficher les logs',
			'CLEAN_LOGS' => 'Nettoyer le bruit',
			'CLEAR' => 'Vider',
			'SIGN_OUT' => 'Déconnexion',
			'UPDATE_AVAILABLE' => 'Une mise-à-jour est disponible !',
			'MIGRATION_AVAILABLE' => 'Une migration est disponible !',
			'CHECK_FOR_UPDATE' => 'Vérifier les mise-à-jour',
			'DEFAULT_LICENSE' => 'License par defaut pour les nouveaux ajouts :',
			'SET_LICENSE' => 'Sélectioner une license',
			'SET_OVERLAY_TYPE' => 'Sélectioner le type d’Overlay',
			'SET_MAP_PROVIDER' => 'Sélectioner le fournisseur de données cartographiques',
			'FULL_SETTINGS' => 'Tous les paramètres',
			'UPDATE' => 'Mettre à jour',
			'RESET' => 'Reset',
			'DISABLE_TOKEN_TOOLTIP' => 'Disable',
			'ENABLE_TOKEN' => 'Enable API token',
			'DISABLED_TOKEN_STATUS_MSG' => 'Disabled',
			'TOKEN_BUTTON' => 'API Token ...',
			'TOKEN_NOT_AVAILABLE' => 'You have already viewed this token.',
			'TOKEN_WAIT' => 'Wait ...',

			'SMART_ALBUMS' => 'Smart Albums',
			'SHARED_ALBUMS' => 'Albums partagés',
			'ALBUMS' => 'Albums',
			'PHOTOS' => 'Photos',
			'SEARCH_RESULTS' => 'Résultats',

			'RENAME' => 'Renommer',
			'RENAME_ALL' => 'Renommer la sélection',
			'MERGE' => 'Fusionner',
			'MERGE_ALL' => 'Fusionner la sélection',
			'MAKE_PUBLIC' => 'Rendre public',
			'SHARE_ALBUM' => 'Partager l’album',
			'SHARE_PHOTO' => 'Partager la photo',
			'VISIBILITY_ALBUM' => 'Visibilité de l’album',
			'VISIBILITY_PHOTO' => 'Visibilité de la Photo',
			'DOWNLOAD_ALBUM' => 'Télécharger l’album',
			'ABOUT_ALBUM' => 'À propos de l’album',
			'DELETE_ALBUM' => 'Supprimer l’album',
			'MOVE_ALBUM' => 'Déplacer l’album',
			'FULLSCREEN_ENTER' => 'Entrer en mode plein écran',
			'FULLSCREEN_EXIT' => 'Sortir du mode plein écran',

			'SHARING_ALBUM_USERS' => 'Partager l’album avec des utilisateurs',
			'WAIT_FETCH_DATA' => 'Merci de patienter que les données soient récupérées…',
			'SHARING_ALBUM_USERS_NO_USERS' => 'Il n’y pas d’utilisateurs avec qui partager cet album',
			'SHARING_ALBUM_USERS_LONG_MESSAGE' => 'Sélectionner les utilisateurs avec qui partager cet album',

			'DELETE_ALBUM_QUESTION' => 'Supprimer l’album et ses photos',
			'KEEP_ALBUM' => 'Garder l’album',
			'DELETE_ALBUM_CONFIRMATION' => 'Voulez-vous vraiment supprimer l’album «%s» et toutes les photos qu’il contient ? Cette action est irréversible !',

			'DELETE_TAG_ALBUM_QUESTION' => 'Supprimer l’album',
			'DELETE_TAG_ALBUM_CONFIRMATION' => 'Voulez-vous vraiment supprimer l’album «%s» (les photos qu’il contient ne seront pas supprimées)? Cette action est irréversible !',

			'DELETE_ALBUMS_QUESTION' => 'Supprimer les albums et leurs photos',
			'KEEP_ALBUMS' => 'Garder les albums',
			'DELETE_ALBUMS_CONFIRMATION' => 'Voulez-vous vraiment supprimer les %d albums selectionnés et toutes leurs photos ? Cette action est irréversible !',

			'DELETE_UNSORTED_CONFIRM' => 'Voulez-vous vraiment supprimer toutes les photos de «Non-triés» ? Cette action est irréversible !',
			'CLEAR_UNSORTED' => 'Vider Non-triés',
			'KEEP_UNSORTED' => 'Garder Non-triés',

			'EDIT_SHARING' => 'Éditer le partage',
			'MAKE_PRIVATE' => 'Rendre privé',

			'CLOSE_ALBUM' => 'Fermer l’album',
			'CLOSE_PHOTO' => 'Fermer la photo',
			'CLOSE_MAP' => 'Fermer la carte',

			'ADD' => 'Ajouter',
			'MOVE' => 'Déplacer',
			'MOVE_ALL' => 'Déplacer la sélection',
			'DUPLICATE' => 'Dupliquer',
			'DUPLICATE_ALL' => 'Dupliquer la sélection',
			'COPY_TO' => 'Copier vers…',
			'COPY_ALL_TO' => 'Copier la sélection vers…',
			'DELETE' => 'Supprimer',
			'SAVE' => 'Sauvegarder',
			'DELETE_ALL' => 'Supprimer la sélection',
			'DOWNLOAD' => 'Télécharger',
			'DOWNLOAD_ALL' => 'Télécharger la sélection',
			'UPLOAD_PHOTO' => 'Ajouter une photo ou une vidéo',
			'IMPORT_LINK' => 'Importer depuis un lien',
			'IMPORT_DROPBOX' => 'Importer depuis Dropbox',
			'IMPORT_SERVER' => 'Importer depuis le serveur',
			'NEW_ALBUM' => 'Nouvel album',
			'NEW_TAG_ALBUM' => 'Nouvel album d’étiquette',
			'UPLOAD_TRACK' => 'Ajouter une trace',
			'DELETE_TRACK' => 'Supprimer la trace',

			'TITLE_NEW_ALBUM' => 'Entrez le titre du nouvel album :',
			'UNTITLED' => 'Sans titre',
			'UNSORTED' => 'Non-triés',
			'STARRED' => 'Favoris',
			'RECENT' => 'Récent',
			'PUBLIC' => 'Public',
			'NUM_PHOTOS' => 'Photos',

			'CREATE_ALBUM' => 'Créer un album',
			'CREATE_TAG_ALBUM' => 'Créer un album d’étiquette',

			'STAR_PHOTO' => 'Mettre en Favoris',
			'STAR' => 'Favori',
			'UNSTAR' => 'Retirer des favoris',
			'STAR_ALL' => 'Marquer la sélection comme favoris',
			'UNSTAR_ALL' => 'Retirer la sélection des favoris',
			'TAG' => 'Tagger',
			'TAG_ALL' => 'Tagger la sélection',
			'UNSTAR_PHOTO' => 'Retirer des Favoris',
			'SET_COVER' => 'Changer la couverture de l’album',
			'REMOVE_COVER' => 'Supprimer la couverture de l’album',

			'FULL_PHOTO' => 'Ouvrir l’original',
			'ABOUT_PHOTO' => 'À propos de la photo',
			'DISPLAY_FULL_MAP' => 'Carte',
			'DIRECT_LINK' => 'Lien direct',
			'DIRECT_LINKS' => 'Liens directs',
			'QR_CODE' => 'QR Code',

			'ALBUM_ABOUT' => 'À propos',
			'ALBUM_BASICS' => 'Informations de base',
			'ALBUM_TITLE' => 'Titre',
			'ALBUM_NEW_TITLE' => 'Entrez un nouveau titre pour cet album :',
			'ALBUMS_NEW_TITLE' => 'Entrez un titre pour les %d albums sélectionnés :',
			'ALBUM_SET_TITLE' => 'Enregistrer le titre',
			'ALBUM_DESCRIPTION' => 'Description',
			'ALBUM_SHOW_TAGS' => 'Étiquettes à afficher',
			'ALBUM_NEW_DESCRIPTION' => 'Entrez une nouvelle description pour cet album :',
			'ALBUM_SET_DESCRIPTION' => 'Choisir une description',
			'ALBUM_NEW_SHOWTAGS' => 'Entrez les étiquettes des photos qui seront affichées dans cet album :',
			'ALBUM_SET_SHOWTAGS' => 'Afficher ces étiquettes',
			'ALBUM_ALBUM' => 'Album',
			'ALBUM_CREATED' => 'Créé',
			'ALBUM_IMAGES' => 'Images',
			'ALBUM_VIDEOS' => 'Videos',
			'ALBUM_SUBALBUMS' => 'Sous-albums',
			'ALBUM_SHARING' => 'Partager',
			'ALBUM_SHR_YES' => 'Oui',
			'ALBUM_SHR_NO' => 'Non',
			'ALBUM_PUBLIC' => 'Public',
			'ALBUM_PUBLIC_EXPL' => 'Les utilisateurs anonymes peuvent accéder à cet album, sous réserve des restrictions suivantes.',
			'ALBUM_FULL' => 'Originaux',
			'ALBUM_FULL_EXPL' => 'Les utilisateurs anonymes peuvent contempler des photos en pleine résolution.',
			'ALBUM_HIDDEN' => 'Masqué',
			'ALBUM_HIDDEN_EXPL' => 'Les utilisateurs anonymes ont besoin d’un lien direct pour accéder à cet album.',
			'ALBUM_MARK_NSFW' => 'Marquer cet album comme sensible',
			'ALBUM_UNMARK_NSFW' => 'Retirer la marque «album sensible»',
			'ALBUM_NSFW' => 'Sensible',
			'ALBUM_NSFW_EXPL' => 'Cet album contient des photos pouvant choquer les utilisateurs.',
			'ALBUM_DOWNLOADABLE' => 'Téléchargeable',
			'ALBUM_DOWNLOADABLE_EXPL' => 'Les utilisateurs anonymes peuvent télécharger cet album.',
			'ALBUM_SHARE_BUTTON_VISIBLE' => 'Visibilité du bouton de partage.',
			'ALBUM_SHARE_BUTTON_VISIBLE_EXPL' => 'Les utilisateurs anonymes peuvent voir les liens de partage sur les média sociaux.',
			'ALBUM_PASSWORD' => 'Mot de passe',
			'ALBUM_PASSWORD_PROT' => 'Protéger par un mot de passe.',
			'ALBUM_PASSWORD_PROT_EXPL' => 'Les utilisateurs anonymes ont besoin d’un mot de passe partagé pour accéder à cet album.',
			'ALBUM_PASSWORD_REQUIRED' => 'Cet album est protégé par un mot de passe. Entrez le mot de passe pour afficher les photos de cet album :',
			'ALBUM_MERGE' => 'Voulez-vous vraiment fusionner l’album «%1$s» dans l’album «%2$s» ?', // `dans` est important car il indique la direction du merge
			'ALBUMS_MERGE' => 'Voulez-vous vraiment fusionner les albums selectionnés avec l’album «%s»?',
			'MERGE_ALBUM' => 'Fusionner les albums',
			'DONT_MERGE' => 'Ne pas fusionner.',
			'ALBUM_MOVE' => 'Voulez-vous vraiment déplacer l’album «%1$s» dans l’album «%2$s» ?',
			'ALBUMS_MOVE' => 'Voulez-vous vraiment déplacer les albums selectionnés dans l’album «%s» ?',
			'MOVE_ALBUMS' => 'Déplacer les albums',
			'NOT_MOVE_ALBUMS' => 'Ne pas déplacer',
			'ROOT' => 'Albums',
			'ALBUM_REUSE' => 'Réutilisation',
			'ALBUM_LICENSE' => 'License',
			'ALBUM_SET_LICENSE' => 'Sélectioner une license',
			'ALBUM_LICENSE_HELP' => 'Un doute sur le choix ?',
			'ALBUM_LICENSE_NONE' => 'Aucune',
			'ALBUM_RESERVED' => 'Tous droits réservés',
			'ALBUM_SET_ORDER' => 'Changer l’ordre',
			'ALBUM_ORDERING' => 'Trier par',
			'ALBUM_OWNER' => 'Propriétaire',

			'PHOTO_ABOUT' => 'À propos',
			'PHOTO_BASICS' => 'Informations de base',
			'PHOTO_TITLE' => 'Titre',
			'PHOTO_NEW_TITLE' => 'Entrer un nouveau titre pour cette photo :',
			'PHOTO_SET_TITLE' => 'Choisir un titre',
			'PHOTO_UPLOADED' => 'Uploadé', // Frenglish, but I don't care. Telecharge est ambigu en Francais...
			'PHOTO_DESCRIPTION' => 'Description',
			'PHOTO_NEW_DESCRIPTION' => 'Entrez une nouvelle description pour cette photo :',
			'PHOTO_SET_DESCRIPTION' => 'Choisir une description',
			'PHOTO_NEW_LICENSE' => 'Ajouter une License',
			'PHOTO_SET_LICENSE' => 'Sélectionner License',
			'PHOTO_LICENSE' => 'License',
			'PHOTO_LICENSE_HELP' => 'Un doute sur le choix ?',
			'PHOTO_REUSE' => 'Réutilisation',
			'PHOTO_LICENSE_NONE' => 'Aucune',
			'PHOTO_RESERVED' => 'Tous droits réservés',
			'PHOTO_LATITUDE' => 'Latitude',
			'PHOTO_LONGITUDE' => 'Longitude',
			'PHOTO_ALTITUDE' => 'Altitude',
			'PHOTO_IMGDIRECTION' => 'Direction',
			'PHOTO_LOCATION' => 'Localisation',
			'PHOTO_IMAGE' => 'Image',
			'PHOTO_VIDEO' => 'Vidéo',
			'PHOTO_SIZE' => 'Dimension',
			'PHOTO_FORMAT' => 'Format',
			'PHOTO_RESOLUTION' => 'Résolution',
			'PHOTO_DURATION' => 'Durée',
			'PHOTO_FPS' => 'Fréquence',
			'PHOTO_TAGS' => 'Étiquettes',
			'PHOTO_NOTAGS' => 'Pas d’étiquettes',
			'PHOTO_NEW_TAGS' => 'Entrez vos étiquettes pour cette photo. Vous pouvez ajouter plusieurs étiquettes en les séparant avec une virgule :',
			'PHOTOS_NEW_TAGS' => 'Entrez vos étiquettes pour toutes les %d photos selectionnées. Les tags existants seront remplacés. Vous pouvez ajouter plusieurs tags en les séparant avec une virgule :',
			'PHOTO_SET_TAGS' => 'Établir les étiquettes',
			'PHOTO_CAMERA' => 'Appareil',
			'PHOTO_CAPTURED' => 'Date de prise de vue',
			'PHOTO_MAKE' => 'Marque',
			'PHOTO_TYPE' => 'Modèle',
			'PHOTO_LENS' => 'Objectif',
			'PHOTO_SHUTTER' => 'Durée d’exposition',
			'PHOTO_APERTURE' => 'Ouverture',
			'PHOTO_FOCAL' => 'Distance focale',
			'PHOTO_ISO' => 'ISO %s',
			'PHOTO_SHARING' => 'Partager',
			'PHOTO_SHR_PUBLIC' => 'Publique',
			'PHOTO_SHR_ALB' => 'Oui (album)',
			'PHOTO_SHR_PHT' => 'Oui (photo)',
			'PHOTO_SHR_NO' => 'Non',
			'PHOTO_DELETE' => 'Supprimer la photo',
			'PHOTO_KEEP' => 'Garder la photo',
			'PHOTO_DELETE_CONFIRMATION' => 'Voulez-vous vraiment supprimer la photo «%s» ? Cette action est irréversible !',
			'PHOTO_DELETE_ALL' => 'Voulez-vous vraiment supprimer toutes les %d photos sélectionnées ? Cette action est irréversible !',
			'PHOTOS_NEW_TITLE' => 'Entrer un titre pour toutes les %d photos sélectionnées :',
			'PHOTO_MAKE_PRIVATE_ALBUM' => 'Cette photo est située dans un album public. Pour rendre cette photo privée ou publique, modifiez la visibilité de l’album associé.',
			'PHOTO_SHOW_ALBUM' => 'Afficher l’album',
			'PHOTO_PUBLIC' => 'Public',
			'PHOTO_PUBLIC_EXPL' => 'Les utilisateurs anonymes peuvent visualiser cette photo sous réserve des restrictions suivantes.',
			'PHOTO_FULL' => 'Originale',
			'PHOTO_FULL_EXPL' => 'Les utilisateurs anonymes peuvent voir la photo en pleine résolution.',
			'PHOTO_HIDDEN' => 'Cachée.',
			'PHOTO_HIDDEN_EXPL' => 'Les utilisateurs anonymes ont besoin d’un lien direct pour voir cette photo.',
			'PHOTO_DOWNLOADABLE' => 'Téléchargeable.',
			'PHOTO_DOWNLOADABLE_EXPL' => 'Les utilisateurs anonymes peuvent télécharger cette photo.',
			'PHOTO_SHARE_BUTTON_VISIBLE' => 'Visibilité du bouton de partage',
			'PHOTO_SHARE_BUTTON_VISIBLE_EXPL' => 'Les utilisateurs anonymes peuvent voir les liens de partage sur les média sociaux.',
			'PHOTO_PASSWORD_PROT' => 'Protéger par un mot de passe.',
			'PHOTO_PASSWORD_PROT_EXPL' => 'Les utilisateurs anonymes ont besoin d’un mot de passe partagé pour voir cette photo.',
			'PHOTO_EDIT_SHARING_TEXT' => 'Les propriété de partages de cette photo seront changé pour les suivantes :',
			'PHOTO_NO_EDIT_SHARING_TEXT' => 'Parce que cette photo est dans un album public, elle hérite des propriété de partage de l’album. Sa visibilité est montrée ci dessous pour votre information.',
			'PHOTO_EDIT_GLOBAL_SHARING_TEXT' => 'La visibilité de cette photo est ajustable avec les paramètres generaux de Lychee.  Sa visibilité est montrée ci dessous pour votre information.',
			'PHOTO_NEW_CREATED_AT' => 'Entrez la date d’upload de cette photo. mm/dd/yyyy, hh:mm [am/pm]',
			'PHOTO_SET_CREATED_AT' => 'Changer la date',

			'LOADING' => 'Chargement en cours',
			'ERROR' => 'Erreur',
			'ERROR_TEXT' => 'Il semble qu’une erreur soit survenue. Veuillez rafraichir la page et réessayer !',
			'ERROR_UNKNOWN' => 'Une erreur inattendue est survenue. Veuillez réessayer et vérifier votre installation et votre serveur. Consultez le fichier Readme pour obtenir plus d’information.',
			'ERROR_LOGIN' => 'Impossible d’enregistrer les informations de connexion. Veuillez réessayer avec un autre nom d’utilisateur et mot de passe.',
			'ERROR_MAP_DEACTIVATED' => 'La carte a été désactivée dans les paramètres.',
			'ERROR_SEARCH_DEACTIVATED' => 'La recherche a été désactivée dans les paramètres.',
			'SUCCESS' => 'OK',
			'RETRY' => 'Réessayer',
			'OVERRIDE' => 'Override',
			'TAGS_OVERRIDE_INFO' => 'If this is unchecked, the tags will be added to the existing tags of the photo.',

			'SETTINGS_SUCCESS_LOGIN' => 'Informations de connexions mise à jour.',
			'SETTINGS_SUCCESS_SORT' => 'Ordre d’affichage mis à jour.',
			'SETTINGS_SUCCESS_DROPBOX' => 'Clé Dropbox mise à jour.',
			'SETTINGS_SUCCESS_LANG' => 'Langage mis à jour.',
			'SETTINGS_SUCCESS_LAYOUT' => 'Affichage mis à jour.',
			'SETTINGS_SUCCESS_IMAGE_OVERLAY' => 'Overlay EXIF mis à jour.',
			'SETTINGS_SUCCESS_PUBLIC_SEARCH' => 'Recherche publique mise à jour.',
			'SETTINGS_SUCCESS_LICENSE' => 'License par défaut mise à jour.',
			'SETTINGS_SUCCESS_MAP_DISPLAY' => 'Paramètres de la carte mis à jour.',
			'SETTINGS_SUCCESS_MAP_DISPLAY_PUBLIC' => 'Paramètres de la carte pour les albums publics mis à jour.',
			'SETTINGS_SUCCESS_MAP_PROVIDER' => 'Fournisseur de la Carte mis à jour.',
			'SETTINGS_SUCCESS_CSS' => 'Stylesheets mise à jour ',
			'SETTINGS_SUCCESS_UPDATE' => 'Paramètres mis à jour avec succes',
			'SETTINGS_DROPBOX_KEY' => 'Dropbox API Key',
			'SETTINGS_ADVANCED_WARNING_EXPL' => 'Changer les paramètres avancés peut influencer la stabilité, la securité et les performances de Lychee. Modifiez à vos risques et périls.',
			'SETTINGS_ADVANCED_SAVE' => 'Sauvegarder mes modifications, j’accepte le risque !',

			'U2F_NOT_SUPPORTED' => 'U2F non suporté. Desolé.',
			'U2F_NOT_SECURE' => 'Environment non sécurisé. U2F non disponible.',
			'U2F_REGISTER_KEY' => 'Enregistrer une nouvelle clé.',
			'U2F_REGISTRATION_SUCCESS' => 'Enregistrement réussi !',
			'U2F_AUTHENTIFICATION_SUCCESS' => 'Authentification réussie !',
			'U2F_CREDENTIALS' => 'Clés',
			'U2F_CREDENTIALS_DELETED' => 'Clé supprimée !',

			'NEW_PHOTOS_NOTIFICATION' => 'Envoyer les notifications de nouvelles photos par emails.',
			'SETTINGS_SUCCESS_NEW_PHOTOS_NOTIFICATION' => 'Notification de nouvelles photos mise à jour',
			'USER_EMAIL_INSTRUCTION' => 'Ajouter votre email Add your email below to enable receiving email notifications. To stop receiving emails, simply remove your email below.',

			'LOGIN_TITLE' => 'Entrez un nom d’utilisateur et un mot de passe pour votre installation :',
			'LOGIN_USERNAME' => 'Nouvel utilisateur',
			'LOGIN_PASSWORD' => 'Nouveau Mot de passe',
			'LOGIN_PASSWORD_CONFIRM' => 'Confirmez le mot de passe',
			'LOGIN_CREATE' => 'Créer les informations de connexion',

			'PASSWORD_TITLE' => 'Entrez votre mot de passe existant :',
			'PASSWORD_CURRENT' => 'Mot de passe existant :',
			'PASSWORD_TEXT' => 'Votre nom d’utilisateur et votre mot de passe seront modifiés comme suit :',
			'PASSWORD_CHANGE' => 'Modifier les informations de connexion',

			'EDIT_SHARING_TITLE' => 'Modifier le partage',
			'EDIT_SHARING_TEXT' => 'Les propriétés de partage de cet album vont être modifiées comme suit :',
			'SHARE_ALBUM_TEXT' => 'Cet album sera partagé avec les propriétés suivantes :',

			'SORT_DIALOG_ATTRIBUTE_LABEL' => 'Attribut',
			'SORT_DIALOG_ORDER_LABEL' => 'Ordre',

			'SORT_ALBUM_BY' => 'Trier les albums %1$s dans l’ordre %2$s.',

			'SORT_ALBUM_SELECT_1' => 'Heure de création',
			'SORT_ALBUM_SELECT_2' => 'Titre',
			'SORT_ALBUM_SELECT_3' => 'Description',
			'SORT_ALBUM_SELECT_4' => 'Public',
			'SORT_ALBUM_SELECT_5' => 'Prise de vue la plus récente',
			'SORT_ALBUM_SELECT_6' => 'Prise de vue la plus ancienne',

			'SORT_PHOTO_BY' => 'Trier les photos %1$s dans l’ordre %2$s.',

			'SORT_PHOTO_SELECT_1' => 'Date d’upload',
			'SORT_PHOTO_SELECT_2' => 'Date de prise de vue',
			'SORT_PHOTO_SELECT_3' => 'Titre',
			'SORT_PHOTO_SELECT_4' => 'Description',
			'SORT_PHOTO_SELECT_5' => 'Public',
			'SORT_PHOTO_SELECT_6' => 'Favoris',
			'SORT_PHOTO_SELECT_7' => 'Format de la photo',

			'SORT_ASCENDING' => 'Croissant',
			'SORT_DESCENDING' => 'Décroissant',
			'SORT_CHANGE' => 'Modifier le tri',

			'DROPBOX_TITLE' => 'Définir une clé Dropbox',
			'DROPBOX_TEXT' => 'Pour pouvoir importer des photos à partir de votre Dropbox, vous aurez besoin d’une clé d’application «drop-ins» valide à créer sur <a href="https://www.dropbox.com/developers/apps/create\">leur site</a>. Générez votre clé personnelle et puis entrez-la ci-dessous :',

			'LANG_TEXT' => 'Remplacer la langue de Lychee par :',
			'LANG_TITLE' => 'Changer la langue',

			'CSS_TEXT' => 'Personalize CSS :',
			'CSS_TITLE' => 'Change CSS',
			'PUBLIC_SEARCH_TEXT' => 'Recherche publique autorisée :',
			'OVERLAY_TYPE' => 'Informations à utiliser pour l’overlay :',
			'OVERLAY_NONE' => 'Pas d’overlay',
			'OVERLAY_EXIF' => 'Informations EXIF',
			'OVERLAY_DESCRIPTION' => 'Description de la photo',
			'OVERLAY_DATE' => 'Date de la photo',
			'MAP_DISPLAY_TEXT' => 'Activer les cartes (fourni par OpenStreetMap):',
			'MAP_DISPLAY_PUBLIC_TEXT' => 'Activer les cartes pour les albums publics (fourni par OpenStreetMap):',
			'MAP_PROVIDER' => 'Fournisseur de cartes OpenStreetMap :',
			'MAP_PROVIDER_WIKIMEDIA' => 'Wikimedia',
			'MAP_PROVIDER_OSM_ORG' => 'OpenStreetMap.org (no HiDPI)',
			'MAP_PROVIDER_OSM_DE' => 'OpenStreetMap.de (no HiDPI)',
			'MAP_PROVIDER_OSM_FR' => 'OpenStreetMap.fr (no HiDPI)',
			'MAP_PROVIDER_RRZE' => 'University de Erlangen, Allemagne (only HiDPI)',
			'MAP_INCLUDE_SUBALBUMS_TEXT' => 'Inclure les photos des sous-albums sur la carte :',
			'LOCATION_DECODING' => 'Convertir les informations GPS en nom de localisation',
			'LOCATION_SHOW' => 'Montrer le nom de la localisation',
			'LOCATION_SHOW_PUBLIC' => 'Montrer le nom de la localisation en mode public',

			'LAYOUT_TYPE' => 'Affichage des photos :',
			'LAYOUT_SQUARES' => 'Miniatures carrées',
			'LAYOUT_JUSTIFIED' => 'En proportions, justifiées',
			'LAYOUT_UNJUSTIFIED' => 'En proportions, non-justifiées',
			'SET_LAYOUT' => 'Changer l’affichage',

			'NSFW_VISIBLE_TEXT_1' => 'Rende les albums sensible visible par défaut.',
			'NSFW_VISIBLE_TEXT_2' => 'Si l’album est public, il est toujours accessible, juste masqué et <b>peut-être révélé avec la touche <kbd>H</kbd></b>.',
			'SETTINGS_SUCCESS_NSFW_VISIBLE' => 'Visibilé par default des albums sensible mis à jour.',

			'NSFW_BANNER' => '<h1>Sensitive content</h1><p>This album contains sensitive content which some people may find offensive or disturbing.</p><p>Tap to consent.</p>',

			'VIEW_NO_RESULT' => 'Aucun résultat',
			'VIEW_NO_PUBLIC_ALBUMS' => 'Aucun album public',
			'VIEW_NO_CONFIGURATION' => 'Aucune configuration',
			'VIEW_PHOTO_NOT_FOUND' => 'Photo introuvable',

			'NO_TAGS' => 'Aucun tag',

			'UPLOAD_MANAGE_NEW_PHOTOS' => 'Vous pouvez désormais gérer vos nouvelles photos.',
			'UPLOAD_COMPLETE' => 'Upload terminé',
			'UPLOAD_COMPLETE_FAILED' => 'L’Upload d’une ou plusieurs photos a échoué.',
			'UPLOAD_IMPORTING' => 'Importation',
			'UPLOAD_IMPORTING_URL' => 'Importation depuis l’URL',
			'UPLOAD_UPLOADING' => 'Upload en cours',
			'UPLOAD_FINISHED' => 'Terminé',
			'UPLOAD_PROCESSING' => 'Traitement',
			'UPLOAD_FAILED' => 'Échec',
			'UPLOAD_FAILED_ERROR' => 'L’upload a échoué. Le serveur a retourné une erreur !',
			'UPLOAD_FAILED_WARNING' => 'L’upload a échoué. Le serveur a retourné un avertissement !',
			'UPLOAD_CANCELLED' => 'Annulé',
			'UPLOAD_SKIPPED' => 'Ignoré',
			'UPLOAD_UPDATED' => 'Mis à jour',
			'UPLOAD_GENERAL' => 'General',
			'UPLOAD_IMPORT_SKIPPED_DUPLICATE' => 'Cette photo a été sautée parce qu’elle est deja dans votre gallerie.',
			'UPLOAD_IMPORT_RESYNCED_DUPLICATE' => 'Cette photo a été sautée parce qu’elle est deja dans votre gallerie, mais ses metadatas ont été mises à jour.',
			'UPLOAD_ERROR_CONSOLE' => 'Veuillez consulter la console de votre navigateur pour obtenir plus de détails.',
			'UPLOAD_UNKNOWN' => 'Le serveur a retourné une reponse inconnue. Veuillez consulter la console de votre navigateur pour obtenir plus de détails.',
			'UPLOAD_ERROR_UNKNOWN' => 'L’upload a échoué. Le serveur a retourné une erreur inconnue !',
			'UPLOAD_ERROR_POSTSIZE' => 'L’upload a échoué. PHP post_max_size est peut-être trop petit ! Sinon consultez la FAQ.',
			'UPLOAD_ERROR_FILESIZE' => 'L’upload a échoué. PHP upload_max_filesize est peut-être trop petit ! Sinon consultez la FAQ.',
			'UPLOAD_IN_PROGRESS' => 'Lychee est en cours de téléchargement !',
			'UPLOAD_IMPORT_WARN_ERR' => 'L’importation est terminée, mais des erreurs ou des avertissements ont été retournés. Veuillez consulter le fichier de Log (Paramètres -> Afficher les logs) pour obtenir plus de détails.',
			'UPLOAD_IMPORT_COMPLETE' => 'Importation terminée',
			'UPLOAD_IMPORT_INSTR' => 'Veuillez entrer un lien direct vers une photo pour l’importer :',
			'UPLOAD_IMPORT' => 'Importer',
			'UPLOAD_IMPORT_SERVER' => 'Importation à partir du serveur',
			'UPLOAD_IMPORT_SERVER_FOLD' => 'Dossier vide ou aucun fichier lisible à traiter. Veuillez consulter le journal (Paramètres -> Afficher le journal) pour obtenir plus de détails.',
			'UPLOAD_IMPORT_SERVER_INSTR' => 'Cette action importera toutes les photos ainsi que tous les dossiers et sous-dossiers situés dans les répertoires suivants séparés par des espaces. Utilisez \\ pour les espaces dans les chemins.',
			'UPLOAD_ABSOLUTE_PATH' => 'Chemin absolu des répertoires, séparés par des espaces',
			'UPLOAD_IMPORT_SERVER_EMPT' => 'Impossible de démarrer l’importation car le dossier était vide !',
			'UPLOAD_IMPORT_DELETE_ORIGINALS' => 'Supprimer les originaux',
			'UPLOAD_IMPORT_DELETE_ORIGINALS_EXPL' => 'Les fichiers originaux seront supprimés après l’importation lorsque cela est possible.',
			'UPLOAD_IMPORT_VIA_SYMLINK' => 'Liens symboliques',
			'UPLOAD_IMPORT_VIA_SYMLINK_EXPL' => 'Importer les fichier en utilisant des liens symboliques vers les originaux.',
			'UPLOAD_IMPORT_SKIP_DUPLICATES' => 'Sauter les doublons',
			'UPLOAD_IMPORT_SKIP_DUPLICATES_EXPL' => 'Les médias déjà existants seront sautés files.',
			'UPLOAD_IMPORT_RESYNC_METADATA' => 'Mettre à jour les metadatas',
			'UPLOAD_IMPORT_RESYNC_METADATA_EXPL' => 'Mettre à jour les metadatas des fichiers existants.',
			'UPLOAD_IMPORT_LOW_MEMORY_EXPL' => 'Le processus d’importation du serveur approche la limite de la mémoire disponible et peut être terminé prématurément.',
			'UPLOAD_WARNING' => 'Attention',
			'UPLOAD_IMPORT_NOT_A_DIRECTORY' => 'Le chemin fourni n’est pas un reportoire lisible !',
			'UPLOAD_IMPORT_PATH_RESERVED' => 'Le chemin fourni est reservé à Lychee !',
			'UPLOAD_IMPORT_FAILED' => 'Impossible d’importer le fichier !',
			'UPLOAD_IMPORT_UNSUPPORTED' => 'Type de fichier non supporté !',
			'UPLOAD_IMPORT_CANCELLED' => 'Import annulé',

			'ABOUT_SUBTITLE' => 'Hebergement personalisé de photo à votre façon !',
			'ABOUT_DESCRIPTION' => '<a target=\'_blank\' href=\'%s\'>Lychee</a> est une outil de gestion de gallerie gratuit qui fonctionne sur votre propre serveur. L’installation est rapide. Uploadez, gérez et partagez vos photos comme avec une application propre. Lychee vous fourni tout ce dont vous avez besoin et vos photos sont stockées en sécurité chez vous.',
			'FOOTER_COPYRIGHT' => 'Toutes les images de ce site Web sont protégées par le droit d’auteur par %1$s © %2$s',
			'HOSTED_WITH_LYCHEE' => 'Herbergé avec Lychee',

			'URL_COPY_TO_CLIPBOARD' => 'Copier dans le presse-papier',
			'URL_COPIED_TO_CLIPBOARD' => 'l’URL a été copiée dans le presse-papier !',
			'PHOTO_DIRECT_LINKS_TO_IMAGES' => 'Liens directs pour les fichier de l’image :',
			'PHOTO_MEDIUM' => 'Moyenne taille',
			'PHOTO_MEDIUM_HIDPI' => 'Moyenne taille HiDPI',
			'PHOTO_SMALL' => 'Petite taille',
			'PHOTO_SMALL_HIDPI' => 'Petite taille HiDPI',
			'PHOTO_THUMB' => 'Mignature carrée',
			'PHOTO_THUMB_HIDPI' => 'Mignature carrée HiDPI',
			'PHOTO_THUMBNAIL' => 'Photo thumbnail',
			'PHOTO_LIVE_VIDEO' => 'Partie vidéo d’une live-photo',
			'PHOTO_VIEW' => 'Vue photo de Lychee :',

			'PHOTO_EDIT_ROTATECWISE' => 'Pivoter dans le sens des aiguilles d’une montre.',
			'PHOTO_EDIT_ROTATECCWISE' => 'Pivoter dans le sens contraire des aiguilles d’une montre.',

			'ERROR_GPX' => 'Erreur lors du chargement du fichier GPX : ',
			'ERROR_EITHER_ALBUMS_OR_PHOTOS' => 'Merci de sélectioner soit des albums, soit des photos !',
			'ERROR_COULD_NOT_FIND' => 'Nous ne trouvons pas ce que vous cherchez.',
			'ERROR_INVALID_EMAIL' => 'Email non valide.',
			'EMAIL_SUCCESS' => 'Email mis à jour !',
			'ERROR_PHOTO_NOT_FOUND' => 'Erreur : photo %s non trouvée !',
			'ERROR_EMPTY_USERNAME' => 'Le nom d utilisateur ne peut être vide.',
			'ERROR_PASSWORD_DOES_NOT_MATCH' => 'Le nouveau mot de passe ne correspondent pas.',
			'ERROR_EMPTY_PASSWORD' => 'Le nouveau mot de passe ne peut pas être vide.',
			'ERROR_SELECT_ALBUM' => 'Sélectionnez un album à partager !',
			'ERROR_SELECT_USER' => 'Sélectionnez un utilisateur avec qui partager !',
			'ERROR_SELECT_SHARING' => 'Sélectionnez un partage à retirer !',
			'SHARING_SUCCESS' => 'Partage mis à jour !',
			'SHARING_REMOVED' => 'Partage supprimé !',
			'USER_CREATED' => 'Utilisateur créé !',
			'USER_DELETED' => 'Utilisateur supprimé !',
			'USER_UPDATED' => 'Utilisateur mis à jour !',
			'ENTER_EMAIL' => 'Entrer une address email :',
			'ERROR_ALBUM_JSON_NOT_FOUND' => 'Erreur : Album json non trouvé !',
			'ERROR_ALBUM_NOT_FOUND' => 'Erreur : album %s non trouvé',
			'ERROR_DROPBOX_KEY' => 'Erreur : Dropbox key vide',
			'ERROR_SESSION' => 'La session a expiré.',
			'CAMERA_DATE' => 'Camera date',
			'NEW_PASSWORD' => 'Nouveau mot de passe',
			'ALLOW_UPLOADS' => 'Authoriser les uploads',
			'RESTRICTED_ACCOUNT' => 'Compte restraint',
			'OSM_CONTRIBUTORS' => 'Contributeur OpenStreetMap',
		];
	}
}
