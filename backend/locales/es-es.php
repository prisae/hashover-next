<?php

// Copyright (C) 2015-2019 Jacob Barkdull
// This file is part of HashOver.
//
// I, Jacob Barkdull, hereby release this work into the public domain.
// This applies worldwide. If this is not legally possible, I grant any
// entity the right to use this work for any purpose, without any
// conditions, unless such conditions are required by law.


// Spanish text for forms, buttons, links, and tooltips
$locale = array (
	'comment-form'		=> 'Escribe un comentario aquí...',
	'reply-form'		=> 'Escribe tu respuesta aquí...',
	'comment-formatting'	=> 'Formateo',
	'accepted-format'	=> '%s aceptado',
	'accepted-html'		=> '&lt;b&gt;, &lt;strong&gt;, &lt;u&gt;, &lt;i&gt;, &lt;em&gt;, &lt;s&gt;, &lt;big&gt;, &lt;small&gt;, &lt;sup&gt;, &lt;sub&gt;, &lt;pre&gt;, &lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;, &lt;blockquote&gt;, &lt;code&gt; escapa HTML, las URLs se convierten automágicamente en enlaces, y [img]URL aquí[/img] mostrará una imagen externa.',
	'accepted-markdown'	=> '**Negrita**, _subrayado_, *cursiva*, ~~tachado~~, `resaltado`, ```código``` escapa HTML. Puedes usar HTML y Markdown juntos en tu comentario.',
	'post-button'		=> 'Publicar comentario',
	'login'			=> 'Iniciar sesión',
	'login-tip'		=> 'Iniciar sesión (opcional)',
	'logout'		=> 'Cerrar sesión',
	'be-first-name'		=> 'Sin comentarios aún.',
	'pending-name'		=> 'Pendiente...',
	'deleted-name'		=> 'Eliminado...',
	'error-name'		=> 'Error...',
	'be-first-note'		=> '¡Sé el primero en comentar!',
	'login-required'	=> '¡Debes iniciar sesión para comentar!',
	'pending-note'		=> 'Este comentario está a la espera de ser aprobado.',
	'deleted-note'		=> 'Este comentario ha sido eliminado.',
	'error-note'		=> 'Algo salió mal. No se pudo recuperar este comentario.',
	'options'		=> 'Opciones',
	'cancel'		=> 'Cancelar',
	'reply-to-comment'	=> 'Responder al comentario',
	'edit-your-comment'	=> 'Editar tu comentario',
	'optional'		=> 'Opcional',
	'required'		=> 'Obligatorio',
	'name'			=> 'Nombre',
	'name-tip'		=> 'Nombre (%s)',
	'password'		=> 'Contraseña',
	'password-tip'		=> 'Contraseña (%s, te permite editar o eliminar tu comentario)',
	'confirm-password'	=> 'Confirmar contraseña',
	'email'			=> 'Correo electrónico',
	'email-tip'		=> 'Dirección de correo electrónico (para notificaciones, %s)',
	'website'		=> array ('Sitio web', 'Sitios web'),
	'website-tip'		=> 'Sitio web (%s)',
	'logged-in'		=> '¡Iniciaste sesión correctamente!',
	'logged-out'		=> '¡Cerraste sesión correctamente!',
	'comment-needed'	=> 'No hiciste ningún comentario válido. Vuelve a intentarlo.',
	'reply-needed'		=> 'No hiciste ninguna respuesta válida. Vuelve a intentarlo.',
	'field-needed'		=> 'El campo «%s» es obligatorio.',
	'post-fail'		=> '¡Error! No tienes permisos suficientes.',
	'comment-deleted'	=> '¡Comentario eliminado!',
	'post-reply'		=> 'Responder',
	'delete'		=> 'Borrar',
	'permanently-delete'	=> 'Borrar permanentemente',
	'subscribe'		=> 'Notificarme si hay respuestas',
	'subscribe-tip'		=> 'Suscribirse a las notificaciones por correo electrónico',
	'edit-comment'		=> 'Editar comentario',
	'status'		=> 'Estado',
	'status-approved'	=> 'Aprobado',
	'status-pending'	=> 'Esperando ser aprobado',
	'status-deleted'	=> 'Marcado como eliminado',
	'save'			=> 'Guardar',
	'no-email-warning'	=> 'No se te notificarán las respuestas a tu comentario si no escribes una dirección de correo electrónico.',
	'invalid-email'		=> 'La dirección de correo electrónico que has introducido no es válida.',
	'delete-comment'	=> '¿Seguro que quieres eliminar este comentario?',
	'post-comment-on'	=> array ('Publicar un comentario', 'Publicar un comentario en "%s"'),
	'most-popular-comments'	=> array ('Comentario más popular', 'Comentarios más populares'),
	'showing-comments'	=> array ('Un comentario', '%d comentarios'),
	'count-replies'		=> array ('Una respuesta', '%d respuestas'),
	'sort'			=> 'Ordenar',
	'sort-ascending'	=> 'En orden',
	'sort-descending'	=> 'En orden inverso',
	'sort-by-date'		=> 'El más reciente primero',
	'sort-by-likes'		=> 'Por «me gustas»',
	'sort-by-replies'	=> 'Por respuestas',
	'sort-by-discussion'	=> 'Por discusión',
	'sort-by-popularity'	=> 'Por popularidad',
	'sort-by-name'		=> 'Por autor del comentario',
	'sort-threads'		=> 'Hilos',
	'thread'		=> 'En respuesta a %s',
	'thread-tip'		=> 'Ir al inicio del hilo',
	'comments'		=> 'Comentarios',
	'replies'		=> 'Respuestas',
	'edit'			=> 'Editar',
	'reply'			=> 'Responder',
	'like'			=> array ('Me gusta', 'Me gusta'),
	'liked'			=> 'Me gusta',
	'unlike'		=> 'Ya no me gusta',
	'like-comment'		=> 'Marcar con «me gusta» este comentario',
	'liked-comment'		=> 'Quitar «me gusta»',
	'dislike'		=> array ('No me gusta', 'No me gusta'),
	'disliked'		=> 'No me gusta',
	'dislike-comment'	=> 'Marcar con «no me gusta» este comentario',
	'disliked-comment'	=> 'Quitar «no me gusta» de este comentario',
	'commenter-tip'		=> 'No se te notificará por correo electrónico',
	'subscribed-tip'	=> 'Se te notificará por correo electrónico',
	'unsubscribed-tip'	=> 'No estás suscrito a las notificaciones por correo electrónico',
	'show-other-comments'	=> array ('Mostrar un comentario más', 'Mostrar %d comentarios más'),
	'show-number-comments'	=> array ('Mostrar un comentario', 'Mostrar %d comentarios'),
	'date-years'		=> array ('Hace un año', 'Hace %d años'),
	'date-months'		=> array ('Hace un mes', 'Hace %d meses'),
	'date-days'		=> array ('Hace un día', 'Hace %d días'),
	'date-today'		=> 'Hoy a las %s',
	'untitled'		=> 'Sin título',
	'external-image-tip'	=> 'Clic para mostrar la imagen externa',
	'loading'		=> 'Cargando...',
	'click-to-close'	=> 'Clic para cerrar',
	'hashover-comments'	=> 'Comentarios de HashOver',
	'rss-feed'		=> 'Fuente RSS',
	'source-code'		=> 'Código fuente',
	'new-comment'		=> 'Nuevo comentario',
	'from'			=> 'De %s',
	'comment'		=> 'Comentario',
	'page'			=> 'Página',
	'sent-by'		=> 'Este correo electrónico fue enviado por %s a través de HashOver.',
	'enabled'		=> 'Habilitado',
	'disabled'		=> 'Desactivado',

	'source-code-sub'	=> 'Visor de código fuente del lado del servidor HashOver',
	'type'			=> 'Tipo',
	'path'			=> 'Ruta',
	'view-as'		=> 'Ver como',
	'text'			=> 'Texto',
	'download'		=> 'Descargar',

	'documentation'		=> 'Documentación',
	'coming-soon'		=> 'Próximamente',
	'example'		=> 'Ejemplo',
	'back'			=> 'Atrás',
	'value'			=> 'Valor',

	'successful-save'	=> '¡Guardado con éxito!',
	'failed-to-save'	=> '¡Error al guardar! Compruebe los permisos.',
	'permissions-info'	=> 'Dar "%s" permisos 0755 y propiedad al usuario "%s".',

	'admin'			=> 'Admin',
	'moderation'		=> 'Moderación',
	'block-ip-addresses'	=> 'Bloquear direcciones IP',
	'filter-url-queries'	=> 'Filtrar consultas URL',
	'check-for-updates'	=> 'Buscar actualizaciones',
	'settings'		=> 'Configuración',

	'admin-required'	=> 'Debe estar registrado como administrador',

	'blocklist-title'	=> 'Lista de direcciones IP Lista de bloqueo',
	'blocklist-sub'		=> 'Bloquear direcciones IP específicas',
	'blocklist-ip-tip'	=> 'Dirección IP o espacio en blanco para eliminar',

	'url-queries-title'	=> 'Consultas URL ignoradas',
	'url-queries-sub'	=> 'Filtra qué consultas URL se deben ignorar',
	'url-queries-name-tip'	=> 'Nombre de la consulta o espacio en blanco para eliminar',
	'url-queries-value-tip'	=> 'Valor de consulta o espacio en blanco para cualquier valor',

	'settings-sub'		=> 'Cambiar varias configuraciones',
	'moderation-sub'	=> 'Publicar, editar, aprobar y eliminar comentarios',

	'general'		=> 'General',
	'e-mail'		=> 'Email',
	'cookies'		=> 'Galletas',
	'comment-collapsing'	=> 'Comentario colapsando',
	'popular-comments'	=> 'Comentarios populares',
	'spam-protection'	=> 'Protección contra el spam',
	'avatars'		=> 'Avatares',
	'form-fields'		=> 'Forma/Campos',
	'date-time'		=> 'Fecha y hora',
	'technical'		=> 'Técnico',

	'setting-language'			=> 'Idioma',
	'setting-theme'				=> 'Tema',
	'setting-default-sorting'		=> 'Orden de clasificación de comentarios predeterminada',
	'setting-uses-moderation'		=> 'Los comentarios publicados por usuarios normales requieren moderación',
	'setting-pends-user-edits'		=> 'Los comentarios editados por usuarios normales requieren moderación',
	'setting-data-format'			=> 'Formato de datos de comentarios',
	'setting-mailer'			=> 'Método de envío por correo electrónico de notificación',
	'setting-mail-type'			=> 'Formato de correos electrónicos de notificación',
	'setting-default-name'			=> 'Nombre de comentarista predeterminado',
	'setting-allows-images'			=> 'Permitir visualización de imágenes en comentarios',
	'setting-allows-login'			=> 'Permitir a los usuarios iniciar sesión',
	'setting-allows-likes'			=> 'Permitir a los usuarios que me gusten los comentarios',
	'setting-allows-dislikes'		=> 'Permitir que los usuarios no les gusten los comentarios',
	'setting-uses-ajax'			=> 'Habilitar funciones de JavaScript asíncronas',
	'setting-collapses-interface'		=> 'Contraer toda la interfaz de usuario de HashOver',
	'setting-collapses-comments'		=> 'Contraer una cantidad configurable de comentarios',
	'setting-collapse-limit'		=> 'Número de comentarios para colapsar',
	'setting-reply-mode'			=> 'Modo de visualización de los hilos de comentario',
	'setting-stream-depth'			=> 'Número de sangrías de respuesta antes de que la transmisión se aplana',
	'setting-popularity-threshold'		=> 'Cantidad neta de "Me gusta" que un comentario debe ser popular',
	'setting-popularity-limit'		=> 'Número de comentarios populares para mostrar',
	'setting-uses-markdown'			=> 'Habilitar compatibilidad con Markdown',
	'setting-server-timezone'		=> 'Zona horaria del servidor',
	'setting-uses-user-timezone'		=> 'Mostrar fechas / horas en la zona horaria del usuario (modo JavaScript)',
	'setting-uses-short-dates'		=> 'Habilitar fechas / horas más cortas (ejemplo "1 día atrás")',
	'setting-time-pattern'			=> 'Formato de tiempo, use "HH:mm" para el formato de 24 horas',
	'setting-date-pattern'			=> 'Formato de fecha',
	'setting-displays-title'		=> 'Habilita la visualización del título de la página',
	'setting-form-position'			=> 'Posición para el formulario de comentario primario',
	'setting-uses-auto-login'		=> 'Registra usuarios automáticamente cuando publican comentarios',
	'setting-shows-reply-count'		=> 'Mostrar recuento de respuestas por separado del recuento total',
	'setting-count-includes-deleted'	=> 'Incluir comentarios eliminados en conteos de comentarios',
	'setting-icon-mode'			=> 'Modo de visualización del icono de Avatar',
	'setting-icon-size'			=> 'Tamaño del icono de Avatar',
	'setting-image-format'			=> 'Formato para iconos y otras imágenes',
	'setting-uses-labels'			=> 'Mostrar etiquetas encima de las entradas',
	'setting-uses-cancel-buttons'		=> 'Mostrar botones de cancelar en formularios de comentarios',
	'setting-appends-css'			=> 'Agregar automáticamente CSS de HashOver a la página',
	'setting-appends-rss'			=> 'Agregar enlaces de Feed RSS de HashOver a la página',
	'setting-login-method'			=> 'Sistema de inicio de sesión de usuario',
	'setting-sets-cookies'			=> 'Habilitar cookies',
	'setting-secure-cookies'		=> 'Usar cookies seguras HTTPS-only',
	'setting-stores-ip-address'		=> 'Habilitar el almacenamiento de direcciones IP de usuario',
	'setting-subscribes-user'		=> 'Suscribir al usuario a notificaciones por correo electrónico de forma predeterminada',
	'setting-allows-user-replies'		=> 'Establecer el correo electrónico del usuario como "Responder a" en las notificaciones de respuesta',
	'setting-noreply-email'			=> 'La dirección de correo electrónico utilizada en las notificaciones de correo electrónico a los usuarios normales',
	'setting-spam-database'			=> 'Ubicación de la base de datos SPAM',
	'setting-spam-check-modes'		=> 'Modos para realizar la comprobación de SPAM debajo de',
	'setting-gravatar-force'		=> 'Usa imágenes temáticas de Gravatar en lugar de avatares',
	'setting-gravatar-default'		=> 'Tema de Gravatar predeterminado para usar',
	'setting-minifies-javascript'		=> 'Habilitar la minificación de JavaScript',
	'setting-minify-level'			=> 'Nivel de minificación de JavaScript',
	'setting-allow-local-metadata'		=> 'Permitir que los metadatos de la página se actualicen desde localhost',
	'setting-name-field'			=> 'Campo de nombre de usuario',
	'setting-password-field'		=> 'Campo de contraseña de usuario, para privilegios de edición',
	'setting-email-field'			=> 'Campo de correo electrónico de notificación al usuario',
	'setting-website-field'			=> 'Campo de URL del sitio web del usuario'
);
